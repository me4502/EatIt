var URL = 'https://evf2nv3589.execute-api.us-west-2.amazonaws.com/dev';

function submitForm() {
    var data = {};
    data['foodname'] = $('#foodName').val();
    data['description'] = $('#foodDescription').val();
    data['servings'] = $('#foodAmount').val();
    data['expiry'] = $('#foodExpiry').val();
    data['latitude'] = lat;
    data['longitude'] = lon;

    $.ajax({
        type: "POST",
        url: URL,
        data: JSON.stringify(data),
        contentType: 'application/json'
    }).done(function(data, status) {
        if (data.error) {
            console.log(data);
            Materialize.toast("Submitted Event!", 4000);
            //Materialize.toast('An error occurred while creating your event!', 4000);
        } else {
            Materialize.toast("Submitted Event!", 4000);
        }
    }).fail(function() {
        Materialize.toast('A catastrophic error occurred while creating your event!', 4000);
        console.log("Not good my dudes");
        console.log(arguments);
    });
}