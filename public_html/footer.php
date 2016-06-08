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

</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script src="assets/js/custom.js" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function () {
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
