// magic.js
$(document).ready(function() {

    // process the form
    $('myForm').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'name'              : $("name").value;
            'email'             : $("email").value;
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'api.php', // the url where we want to POST
            data        :  "name="+nname+"&email="+email,
                         }).done(function(data) {
                        alert(data);
            dataType    : 'applicant/json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data); 

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});
