/**
 * Created by harrisonchow on 6/6/16.
 */
/* ----------------------------------------------------------- */
/* Nob Three Carousel Correction
 /* ----------------------------------------------------------- */
/*$('.carousel.three .item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    if (next.next().length > 0) {
        next.next().children(':first-child').clone().appendTo($(this));
    } else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
});*/
/* ----------------------------------------------------------- */
/* Nob Three Carousel Correction END
 /* ----------------------------------------------------------- */
function loadedGmap() {
    if ($('body').hasClass("index-page")) {
        // create a LatLng object containing the coordinate for the center of the map
        var latlng = new google.maps.LatLng(42.9843805, -81.2589267);

        var styleArr = [{
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#444444"
            }]
        }, {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [{
                "color": "#f2f2f2"
            }]
        }, {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "road",
            "elementType": "all",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 45
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [{
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "water",
            "elementType": "all",
            "stylers": [{
                "color": "#e3e3fb"
            }, {
                "visibility": "on"
            }]
        }];

        // prepare the map properties
        var options = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            navigationControl: true,
            mapTypeControl: false,
            scrollwheel: false,
            styles: styleArr,
            disableDoubleClickZoom: true
        };

        // initialize the map object
        var map = new google.maps.Map(document.getElementById('google_map'), options);

        // add Marker
        var marker1 = new google.maps.Marker({
            position: latlng,
            map: map
        });

        // add listener for a click on the pin
        google.maps.event.addListener(marker1, 'click', function() {
            infowindow.open(map, marker1);
        });

        // add information window
        var infowindow = new google.maps.InfoWindow({
            content: '<div class="info"><strong>This is my company</strong><br><br>My company address is here<br> 32846 Sydney</div>'
        });
    }
};

/* ----------------------------------------------------------- */
/* Nob Mailer START
 /* ----------------------------------------------------------- */
$(document).ready(function() {
    $('form.form-email').submit(function(e) {
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
                sendTo = "michael511.mp@gmail.com", //TODO: Make sure to change it to their email later!!!
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
                success: function(data) {
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
                error: function(error) {
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

/* ----------------------------------------------------------- */
/* Nob Mailer volunteer BEGIN TODO: You need to make this one efficient by combining original email and this volunteer
/* ----------------------------------------------------------- */
$(document).ready(function() {
    $('form.form-volunteer').submit(function(e) {
        if (e.preventDefault) e.preventDefault();
        else e.returnValue = false;

        var thisForm = $(this).closest('form.form-volunteer');
        var submitButton = thisForm.find('button');
        submitButton.prop("disabled", true);
        var emailField = thisForm.find('.form-input-email');
        var nameField = thisForm.find('.form-input-name');
        var messageField = thisForm.find('.form-input-message');

        if (thisForm.attr('data-form-type').indexOf("nob") > -1) {
            // Nob form
            var sendFrom = emailField.val(),
                sendTo = "michael511.mp@gmail.com", //TODO: Make sure to change it to their email later!!!
                subject = "Volunteering Message from " + nameField.val(), //TODO: This is what I changed from e-mail ver
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
                success: function(data) {
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
                error: function(error) {
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
/* Nob API START
/* ----------------------------------------------------------- */
$(document).ready(function() {
    Parse.initialize("developers-foundation-db");
    Parse.serverURL = 'https://developers-foundation-db.herokuapp.com/parse';

    var Website = Parse.Object.extend("Website");
    var query = new Parse.Query(Website);
    query.equalTo("nickname", "Nigerian");
    query.first().then(function(obj) {
    	var promises = [];
        console.log("THIS IS A DEMO");
        console.log(obj);

        document.getElementsByClassName('brand')[0].innerHTML = obj.get('name');
        document.getElementsByClassName('brand')[1].childNodes[1].innerHTML = obj.get('name');
        var dbContent = obj.get('content');
        console.log(dbContent);
        $('.section .col-md-8').html(dbContent.data[0].content);

        $('#item1').html(dbContent.data[1].content);

        var dbExec = obj.get('exec'),
            ExecPhoto = Parse.Object.extend("ExecPhoto");
        var execCarousel = $('.carousel-inner')[1];
        var inner = "";
        for (i = 0; i < dbExec.length; i++) {
            var exec = dbExec[i];
            console.log(exec);
            var photoURL,
                name = exec.name,
                position = exec.position,
                description = exec.desc;

            var photoQuery = new Parse.Query(ExecPhoto);
            /*
            <div class="item"><div class="col-md-4"><a href="#"><img src="assets/img/default-user.png" class="img-responsive"><div class="carousel-caption"><h4><i class="material-icons">people</i> John Doe</h4></div></a></div></div>
            */
            promises.push(query.get(exec.pictureid, {
                success: function(photo) {
                    photoURL = photo.get('pictureUrl');
                    if (photoURL === undefined || photoURL === null) {
                        photoURL = "assets/img/default-user.png";
                    }
                    
                    inner = inner + '<div class="item"><div class="col-md-4"><a href="#"><img src="' + photoURL + '" class="img-responsive"><div class="carousel-caption"><h4><i class="material-icons">people</i> ' + name + '</h4></div></a></div></div>';
                    
                    console.log(inner);
        			execCarousel.innerHTML = inner;
                },
                error: function(object, error) {
                	console.log(error);
                    photoURL = "assets/img/default-user.png";
                }
            }));
        }
        console.log(inner);
        return Parse.Promise.when(promises);
    }).then(function () {
    	// done
    	console.log("init");
        // INIT CAROUSEL
        $('.carousel.three .item').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            if (next.next().length > 0) {
                next.next().children(':first-child').clone().appendTo($(this));
            } else {
                $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            }
        });
    });
});
/* ----------------------------------------------------------- */
/* Nob API END
/* ----------------------------------------------------------- */