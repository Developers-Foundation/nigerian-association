<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <!-- TODO: Left it like this so you can decide that to do with it.
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
            -->
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
            <p>Copyright &copy; 2016. <a href="link.php?link=dev">Developers' Foundation</a>. All rights reserved.</p>
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
                <h4 class="modal-title">Volunteer</h4>
            </div>
            <div class="modal-body">
                <p>If you are interested in volunteering your time to set up the new Nigeria Association of London and Area, please complete the form below and we will get back to you. Thank you.</p>
                <div class="row">
                    <form class="form-volunteer" action="" method="post" data-form-type="nob">
                        <div class="col-md-6 left">
                            <div class="input-group">
		                    <span class="input-group-addon">
			                    <i class="fa fa-user"></i>
		                    </span>
                                <input type="text" class="form-control form-input-name" placeholder="Your Name">
                            </div>
                            <div class="input-group">
		                    <span class="input-group-addon">
			                    <i class="fa fa-envelope"></i>
		                    </span>
                                <input type="text" class="form-control form-input-email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-6 right">
                            <textarea class="form-control form-input-message" placeholder="What can you do for us?"
                                      rows="5"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-raised btn-success btn-lg">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->

</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="//www.parsecdn.com/js/parse-1.6.14.min.js"></script>
<script>
Parse.initialize("developers-foundation-db");
Parse.serverURL = 'https://developers-foundation-db.herokuapp.com/parse'
</script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script src="assets/js/custom.js" type="text/javascript"></script>

<?php if (isset($hasGmap) && $hasGmap) echo '<script src="//maps.google.com/maps/api/js?key=AIzaSyAJWaE3XJc5GQZEx5OVK7yIU44tInbavBo&callback=loadedGmap" async defer></script>'; ?>

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
