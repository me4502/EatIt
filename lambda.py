import boto3
from boto3.dynamodb.conditions import Key
import uuid
import datetime
import math

MAX_DISTANCE = 5 # Kilometers
BOUNDARIES = [-MAX_DISTANCE, MAX_DISTANCE]
DECIMAL_PLACES = 9 # DynamoDB doesn't like decimals, so we make them ints

dynamodb = boto3.resource('dynamodb')
food_table = dynamodb.Table('angel-food')

def add_food_log(name, description, longitude, latitude, servings, expiry):
    try:
        longitude = float_to_dyna(float(longitude))
        latitude = float_to_dyna(float(latitude))
    except:
        return {'error': "Invalid Longitude/Latitude"}

    food_table.put_item(Item={
        'uuid': str(uuid.uuid4()),
        'name': name,
        'description': description,
        'longitude': longitude,
        'latitude': latitude,
        'servings': servings,
        'expiry': str(expiry)
    })

def get_latitude_from_km(longitude, latitude, km):
    # 1 degree = 110.574km
    return latitude + (km / 110.574)

def get_longitude_from_km(longitude, latitude, km):
    # 1 degree = 111.320*cos(latitude)km
    return longitude + (km / (111.320*math.cos(latitude)))

def float_to_dyna(f):
    """
    boto doesn't play nice with floats, so we convert to an int
    """
    return int(f * math.pow(10, DECIMAL_PLACES))

def get_nearby(longitude, latitude):
    try:
        longitude = float(longitude)
        latitude = float(latitude)
    except:
        return {'error': "Invalid Longitude/Latitude"}

    latitude_boundaries = [
        float_to_dyna(get_latitude_from_km(longitude, latitude, km))
        for km in BOUNDARIES
    ]
    longitude_boundaries = [
        float_to_dyna(get_longitude_from_km(longitude, latitude, km))
        for km in BOUNDARIES
    ]

    response = food_table.scan(
        FilterExpression=(
            Key('longitude').between(*longitude_boundaries) &
            Key('latitude').between(*latitude_boundaries)
        )
    )

    return {'items': response['Items']}

def lambda_handler(event, context):
    if 'httpMethod' not in event:
        return {'error': 'Bypassed mapping'}

    if event['httpMethod'] == 'GET':
        if 'longitude' not in event or 'latitude' not in event:
            return {'error': 'Missing long/lat'}
        else:
            return get_nearby(event['longitude'], event['latitude'])
    else:
        add_food_log('Memes', 'A spicey meme', event['longitude'], event['latitude'], 1, datetime.datetime.now())
        return 'memes'
