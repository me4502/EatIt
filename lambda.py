import boto3
import uuid
import datetime

dynamodb = boto3.resource('dynamodb')
food_table = dynamodb.Table('angel-food')

def add_food_log(name, description, longitude, latitude, servings, expiry):
    food_table.put_item(Item={
        'uuid': str(uuid.uuid4()),
        'name': name,
        'description': description,
        'location': {
            'longitude': longitude,
            'latitude': latitude
        },
        'servings': servings,
        'expiry': str(expiry)
    })

def lambda_handler(event, context):
    add_food_log('Memes', 'A spicey meme', 1, 2, 1, datetime.datetime.now())
    return 'Hello from Lambda'
