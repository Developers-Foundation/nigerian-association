/**
 * Created by harrisonchow on 6/6/16.
 */

/* ----------------------------------------------------------- */
/* Nob Carousel Correction
 /* ----------------------------------------------------------- */
$('.carousel .item').each(function () {
    var next = $(this).next();

    if (!next.length) {
        next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length > 0) {
        next.next().children(':first-child').clone().appendTo($(this));
    }
    else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
});

$(document).ready(function () {
    // create a LatLng object containing the coordinate for the center of the map
    var latlng = new google.maps.LatLng(-33.86455, 151.209);

    // prepare the map properties
    var options = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        navigationControl: true,
        mapTypeControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true
    };

    // initialize the map object
    var map = new google.maps.Map(document.getElementById('google_map'), options);

    // add Marker
    var marker1 = new google.maps.Marker({
        position: latlng, map: map
    });

    // add listener for a click on the pin
    google.maps.event.addListener(marker1, 'click', function () {
        infowindow.open(map, marker1);
    });

    // add information window
    var infowindow = new google.maps.InfoWindow({
        content: '<div class="info"><strong>This is my company</strong><br><br>My company address is here<br> 32846 Sydney</div>'
    });
});

/* ----------------------------------------------------------- */
/* Nob Mailer START
 /* ----------------------------------------------------------- */
$(document).ready(function () {
    $('form.form-email').submit(function (e) {
        if (e.preventDefault) e.preventDefault();
        else e.returnValue = false;

        var thisForm = $(this).closest('form.form-email');
        var submitButton = thisForm.find('button');
        submitButton.prop("disabled", true);
        var emailField = thisForm.find('.form-input-email');
        var nameField = thisForm.find('.form-input-name');
        var messageField = thisForm.find('.form-input-message');

        if (thisForm.attr('data-form-type').indexOf("nob") > -1) {
            // Nob form
            var sendFrom = emailField.val(),
                sendTo = "harrisonchowhk@yahoo.com",
                subject = "Message from " + nameField.val(),
                msg = messageField.val(),
                msgHTML = "<p>" + messageField.val() + "<p>",
                fromName = nameField.val(),
                toName = "Nigerian Association of London and Area";

            var sendData = JSON.stringify({
                'sendFrom': sendFrom,
                'fromName': fromName,
                'sendTo': sendTo,
                'toName': toName,
                'subject': subject,
                'msg': msg,
                'msgHTML': msgHTML
            });

            $.ajax({
                url: 'assets/mail/mailer.php',
                crossDomain: false,
                data: sendData,
                method: "POST",
                cache: false,
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    // Deal with JSON
                    console.log(data);
                    var returnData = data;
                    submitButton.removeClass("btn-primary");
                    if (returnData.success) {
                        // Throw success msg
                        emailField.val("");
                        nameField.val("");
                        messageField.val("");
                        submitButton.html("Received");
                        submitButton.addClass("btn-success");
                    } else {
                        // Throw error message
                        submitButton.html("Sorry an error occured");
                        submitButton.addClass("btn-danger");
                    }
                    submitButton.prop("disabled", false);
                },
                error: function (error) {
                    console.log(error);
                    // Throw error message
                    submitButton.html("Sorry an error occured");
                    submitButton.removeClass("btn-primary");
                    submitButton.addClass("btn-danger");
                    submitButton.prop("disabled", false);
                }
            });
        }
    });
});
/* ----------------------------------------------------------- */
/* Nob Mailer END
 /* ----------------------------------------------------------- */