/**
 * Created by harrisonchow on 6/6/16.
 */

/* ----------------------------------------------------------- */
/* Nob Three Carousel Correction
 /* ----------------------------------------------------------- */
$('.carousel.three .item').each(function () {
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
/* ----------------------------------------------------------- */
/* Nob Three Carousel Correction END
 /* ----------------------------------------------------------- */


$(document).ready(function () {
    if ($('body').hasClass("index-page")) {
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
    }
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

/*
 (function($) {

 /!* Masonry Grid *!/
 $(document).on('add.cards change.cards', function(event) {
 if(typeof $.fn.masonry !== 'undefined') {
 $(event.target).outerFind('.mbr-gallery').each(function() {
 var $msnr = $(this).find('.mbr-gallery-row').masonry({
 itemSelector: '.mbr-gallery-item',
 percentPosition: true
 });

 // reload masonry (need for adding new or resort items)
 $msnr.masonry('reloadItems');

 // layout Masonry after each image loads
 $msnr.imagesLoaded().progress(function() {
 $msnr.masonry('layout');
 });
 });
 }
 });

 var timeout;
 function fitLBtimeout() {
 clearTimeout(timeout);
 timeout = setTimeout(fitLightbox, 50);
 }

 /!* Lightbox Fit *!/
 function fitLightbox() {
 var $lightbox = $('.mbr-gallery .modal');
 if(!$lightbox.length) {
 return;
 }

 var bottomPadding = 30;
 var wndW = $(window).width();
 var wndH = $(window).height();
 $lightbox.each(function() {
 var setWidth, setTop;
 var isShown = $(this).hasClass('in');
 var $modalDialog = $(this).find('.modal-dialog');
 var $currentImg = $modalDialog.find('.item.active > img');

 if($modalDialog.find('.item.prev > img, .item.next > img').length) {
 $currentImg = $modalDialog.find('.item.prev > img, .item.next > img').eq(0);
 }

 var lbW = $currentImg[0].naturalWidth;
 var lbH = $currentImg[0].naturalHeight;

 // height change
 if( wndW / wndH > lbW / lbH) {
 var needH = wndH - bottomPadding * 2;
 setWidth = needH * lbW / lbH;
 }

 // width change
 else {
 setWidth = wndW - bottomPadding * 2;
 }

 // check for maw width
 setWidth = setWidth >= lbW ? lbW : setWidth;

 // set top to vertical center
 setTop = (wndH - bottomPadding * 2 - setWidth * lbH / lbW) / 2;

 $modalDialog.css({
 width: parseInt(setWidth),
 top: setTop
 });
 });
 }
 // $(document).on('add.cards change.cards', fitLightbox);
 $(window).on('resize load', fitLBtimeout);
 $(window).on('show.bs.modal', fitLBtimeout);
 $(window).on('slid.bs.carousel', fitLBtimeout);

 }(jQuery));*/
