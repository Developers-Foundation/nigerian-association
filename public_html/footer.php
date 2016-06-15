<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Company</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
            </ul>
        </nav>
        <div class="social-area pull-right">
            <a href="link.php?link=facebook" class="btn btn-social btn-facebook btn-simple">
                <i class="fa fa-facebook-square"></i>
            </a>
            <a href="link.php?link=twitter" class="btn btn-social btn-twitter btn-simple">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="link.php?link=instagram" class="btn btn-social btn-instagram btn-simple">
                <i class="fa fa-instagram"></i>
            </a>
            <a href="link.php?link=email" class="btn btn-social btn-simple">
                <i class="fa fa-envelope-o"></i>
            </a>
        </div>
        <div class="copyright">
            &copy; 2016 <a href="link.php?link=dev">Developers' Foundation</a>, made with love
        </div>
    </div>
</footer>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="volunteerModal" tabindex="-1" role="dialog" aria-labelledby="Volunteer Now"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean. A small river named Duden flows by their place and supplies it with the necessary
                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic
                    life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the
                    far World of Grammar.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple">Nice Button</button>
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->

</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<?php if (isset($hasGmap) && $hasGmap) echo '<script src="//maps.google.com/maps/api/js?key=AIzaSyAJWaE3XJc5GQZEx5OVK7yIU44tInbavBo&callback=loadedGmap" async defer></script>'; ?>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script src="assets/js/custom.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        // the body of this function is in assets/material-kit.js
        //materialKit.initSliders();
        $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

        window_width = $(window).width();

        if (window_width >= 768) {
            big_image = $('.wrapper > .header');

            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
        }
    });
</script>
</html>
