
$(window).load(function() {
    //Host Name

    

    $(document).ready(function(){


        //landing page user signup actions---Desktop
        $( "#user-form_landing" ).submit(function( event ) {
            console.log("user-form_landing submit1");
            event.preventDefault();

            var customerName = $('input[name="customer-name"]').val();
            //console.log("customerName "+customerName);
            if ( (customerName=="")) //|| (customerName==undefined))
            {
                //console.log("here");
                var formdata = {
                    "user_name": $("#user-name").val(),
                    "user_email": $("#user-email").val()

                };


                $.ajax({
                    type: "POST",
                    url: remoteURL+"landing_form-submit.php",
                    data: JSON.stringify(formdata),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (response) {

                        if(response.status){
                            /*$("#user-form_landing").trigger('reset'); //jquery */
                             window.location.href = "./Thanks.php";
                        }

                    },
                    error: function(jqXHR, exception) {
                        // alert("error")
                    }
                });
            }

        });

        //landing page user signup actions---Mobile

        $( "#user-form_landing-mobile" ).submit(function( event ) {
            console.log("user-form_landing submit1");
            event.preventDefault();

            var customerName = $('input[name="customer-name"]').val();
            //console.log("customerName "+customerName);
            if ( (customerName=="")) //|| (customerName==undefined))
            {
                //console.log("here");
                var formdata = {
                    "user_name": $("#user-name-mobile").val(),
                    "user_email": $("#user-email-mobile").val()

                };


                $.ajax({
                    type: "POST",
                    url: remoteURL+"landing_form-submit.php",
                    data: JSON.stringify(formdata),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (response) {

                        if(response.status){
                           /* $("#user-form_landing-mobile").trigger('reset'); //jquery */
                            window.location.href = "./Thanks.php";
                        }

                    },
                    error: function(jqXHR, exception) {
                        // alert("error")
                    }
                });
            }

        });





    //landing page realtor signup actions-Desktop

    $( "#realtor-form_landing" ).submit(function( event ) {
        console.log("realtor-form_landing submit");
        event.preventDefault();

        var customerName = $('input[name="customer-name"]').val();
        if (customerName==""){
            var formdata = {
                "user_name": $("#user-name").val(),
                "user_email": $("#user-email").val()

            };


            $.ajax({
                type: "POST",
                url: remoteURL+"realtor_form-submit.php",
                data: JSON.stringify(formdata),
                contentType: "application/json",
                dataType: "json",
                success: function (response) {

                    if(response.status){
                       /* $("#retailer-form_landing").trigger('reset'); //jquery*/
                        window.location.href = "./Thanks.php";
                    }

                },
                error: function(jqXHR, exception) {
                    // alert("error")
                }
            });
        }

    });

        //landing page realtor signup actions-Mobile

        $( "#realtor-form_landing-mobile" ).submit(function( event ) {
            console.log("realtor-form_landing-mobile submit");
            event.preventDefault();

            var customerName = $('input[name="customer-name"]').val();
            if (customerName==""){
                var formdata = {
                    "user_name": $("#user-name-mobile").val(),
                    "user_email": $("#user-email-mobile").val()

                };


                $.ajax({
                    type: "POST",
                    /*url: remoteURL+"retailer_form-submit.php", */
                    url: remoteURL+"realtor_form-submit.php",
                    data: JSON.stringify(formdata),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (response) {

                        if(response.status){
                            /* $("#retailer-form_landing-mobile").trigger('reset'); //jquery*/
                            window.location.href = "./Thanks.php";
                        }

                    },
                    error: function(jqXHR, exception) {
                        // alert("error")
                    }
                });
            }

        });


        //landing page inspector signup actions -Desktop

        $( "#inspector-form_landing" ).submit(function( event ) {
            console.log("inspector-form_landing submit");
            event.preventDefault();

            var customerName = $('input[name="customer-name"]').val();
            if (customerName==""){
                var formdata = {
                    "user_name": $("#user-name").val(),
                    "user_email": $("#user-email").val()

                };


                $.ajax({
                    type: "POST",
                    url: remoteURL+"inspector_form-submit.php",
                    data: JSON.stringify(formdata),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (response) {

                        if(response.status){
                            /*$("#inspector-form_landing").trigger('reset'); //jquery */
                            window.location.href = "./Thanks.php";
                        }

                    },
                    error: function(jqXHR, exception) {
                        // alert("error")
                    }
                });
            }

        });


        //landing page inspector signup actions -Mobile

        $( "#inspector-form_landing-mobile" ).submit(function( event ) {
            console.log("inspector-form_landing submit");
            event.preventDefault();

            var customerName = $('input[name="customer-name"]').val();
            if (customerName==""){
                var formdata = {
                    "user_name": $("#user-name-mobile").val(),
                    "user_email": $("#user-email-mobile").val()

                };


                $.ajax({
                    type: "POST",
                    url: remoteURL+"inspector_form-submit.php",
                    data: JSON.stringify(formdata),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (response) {

                        if(response.status){
                            /*$("#inspector-form_landing-mobile").trigger('reset'); //jquery */
                            window.location.href = "./Thanks.php";
                        }

                    },
                    error: function(jqXHR, exception) {
                        // alert("error")
                    }
                });
            }

        });



        //landing page FSBO signup actions  ---Desktop

        $( "#fsbo-form_landing" ).submit(function( event ) {
            console.log("fsbo-form_landing submit");
            event.preventDefault();

            var customerName = $('input[name="customer-name"]').val();
            if (customerName==""){
                var formdata = {
                    "user_name": $("#user-name").val(),
                    "user_email": $("#user-email").val()

                };


                $.ajax({
                    type: "POST",
                    url: remoteURL+"FSBO_form-submit.php",
                    data: JSON.stringify(formdata),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (response) {

                        if(response.status){
                            /*$("#fsbo-form_landing").trigger('reset'); //jquery  */
                            window.location.href = "./Thanks.php";
                        }

                    },
                    error: function(jqXHR, exception) {
                        // alert("error")
                    }
                });
            }

        });


        //landing page FSBO signup actions  ---Mobile
        $( "#fsbo-form_landing-mobile" ).submit(function( event ) {
            console.log("fsbo-form_landing submit");
            event.preventDefault();

            var customerName = $('input[name="customer-name"]').val();
            if (customerName==""){
                var formdata = {
                    "user_name": $("#user-name-mobile").val(),
                    "user_email": $("#user-email-mobile").val()

                };


                $.ajax({
                    type: "POST",
                    url: remoteURL+"FSBO_form-submit.php",
                    data: JSON.stringify(formdata),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (response) {

                        if(response.status){
                            /*$("#fsbo-form_landing-mobile").trigger('reset'); //jquery */
                            window.location.href = "./Thanks.php";
                        }

                    },
                    error: function(jqXHR, exception) {
                        // alert("error")
                    }
                });
            }

        });


    });
});


