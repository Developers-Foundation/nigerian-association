<div class="header header-filter carousel slide" style="" id="title-carousel" xmlns="http://www.w3.org/1999/html"
     xmlns="http://www.w3.org/1999/html">
    <ol class="carousel-indicators">
        <li data-target="#title-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#title-carousel" data-slide-to="1" class=""></li>
        <li data-target="#title-carousel" data-slide-to="2" class=""></li>
        <li data-target="#title-carousel" data-slide-to="3" class=""></li>
        <li data-target="#title-carousel" data-slide-to="4" class=""></li>
        <li data-target="#title-carousel" data-slide-to="5" class=""></li>
    </ol>
    <div class="carousel-inner title-carousel">
        <div class="item">
            <img src="assets/img/bg.jpg" style="width: 100%;" class="img-responsive">
            <div class="carousel-caption">
                <!--<h4><i class="material-icons">mood</i> John Doe</h4>-->
                test
            </div>
        </div>
        <div class="item">
            <img src="assets/img/bg2.jpeg" style="width: 100%;" class="img-responsive">
            <div class="carousel-caption">
                <!--<h4><i class="material-icons">mood</i> John Doe</h4>-->
            </div>
        </div>
        <div class="item">
            <img src="assets/img/bg3.jpeg" style="width: 100%;" class="img-responsive">
            <div class="carousel-caption">
                <!--<h4><i class="material-icons">mood</i> John Doe</h4>-->
            </div>
        </div>
        <div class="item">
            <img src="assets/img/bg4.jpeg" style="width: 100%;" class="img-responsive">
            <div class="carousel-caption">
                <!--<h4><i class="material-icons">mood</i> John Doe</h4>-->
            </div>
        </div>
        <div class="item active">
            <img src="assets/img/bg6.jpg" style="width: 100%;" class="img-responsive">
            <div class="carousel-caption">
                <!--<h4><i class="material-icons">mood</i> John Doe</h4>-->
            </div>
        </div>
    </div>
    <!--<a class="left carousel-control" href="#teamCarousel" data-slide="prev">
        <i class="material-icons black-icon">keyboard_arrow_left</i>
    </a>
    <a class="right carousel-control" href="#teamCarousel" data-slide="next">
        <i class="material-icons black-icon">keyboard_arrow_right</i>
    </a>-->
    <div class="container" id="title-overlay">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="brand">
                    <h1>Nigerian Association of London and Area.</h1>
                    <h3>London Ontario, Canada</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="section">
        <div class="container">
            <div class="title">
                <h2><strong>Who We Are</strong></h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/photos/01.jpg" class="img-responsive">
                </div>
                <div class="col-md-8">
                    </br>
                    </br>
                    <p><i class="fa fa-dot-circle-o"></i> The Nigerian Association of London and Area (NALA) is a
                        community of Londoners of Nigerian
                        descent.</p>
                    <p><i class="fa fa-dot-circle-o"></i> The new NALA is preceded by a similar organization that
                        existed until the 90s. The Nigerian
                        community met on March 7, 2015 where the Interim Management Team (IMT)was formed.</p>
                    <p><i class="fa fa-dot-circle-o"></i> The IMT then convened a Special General Meeting on August 8,
                        2015 where New Officers were
                        elected and the IMT handed over to the new team.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="section" style="background-image: url('assets/img/city.jpg')">
        <div class="container">
            <div class="title">
                <h2><Strong>Our Team</Strong></h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-carousel">
                        <div class="carousel slide three" id="teamCarousel" data-ride="carousel">
                            <?php
                            use Parse\ParseClient;
                            use Parse\ParseQuery;

                            ParseClient::initialize("developers-foundation-db", '', "Abcd1234");
                            ParseClient::setServerURL("https://developers-foundation-db.herokuapp.com", "parse");

                            $query = new ParseQuery("Website");
                            $query->equalTo("nickname", "Nigerian");
                            $website = $query->first();
                            $exec = $website->get('exec');
                            $indicators = "";
                            $items = "";
                            var_dump($exec);
                            for ($i = 0, $first = true; $i < count($exec); $i++) {
                                $indicators += "<li data-target=\"#teamCarousel\" data-slide-to=\"" . $i . "\" class=\"" . ($first ? "active" : "") . "\"></li>";

                                $photoURL = "assets/img/default-user.png";

                                $items += "<div class=\"item" . ($first ? " active" : "") + "\"><div class=\"col-md-4\"><a href=\"#\"><img src=\"" . $photoURL . "\" class=\"img-responsive\"><div class=\"carousel-caption\"><h4><i class=\"material-icons\">people</i> " . $exec[$i]->get("name") . "</h4></div></a></div></div>";
                                $first = false;
                            }
                            ?>
                            <ol class="carousel-indicators">
                                <?php
                                echo $indicators;
                                ?>
                                <!--<li data-target="#teamCarousel" data-slide-to="1" class="active"></li>
                                <li data-target="#teamCarousel" data-slide-to="2" class=""></li>
                                <li data-target="#teamCarousel" data-slide-to="3" class=""></li>
                                <li data-target="#teamCarousel" data-slide-to="4" class=""></li>
                                <li data-target="#teamCarousel" data-slide-to="5" class=""></li>
                                <li data-target="#teamCarousel" data-slide-to="0" class=""></li>-->
                            </ol>
                            <div class="carousel-inner">
                                <?php
                                echo $items;
                                ?>
                                <!--<div class="item">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/img/default-user.png" class="img-responsive">
                                            <div class="carousel-caption">
                                                <h4><i class="material-icons">people</i> John Doe</h4>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/img/default-user.png" class="img-responsive">
                                            <div class="carousel-caption">
                                                <h4><i class="material-icons">people_outline</i> John Doe</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/img/default-user.png" class="img-responsive">
                                            <div class="carousel-caption">
                                                <h4><i class="material-icons">portrait</i> John Doe</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/img/default-user.png" class="img-responsive">
                                            <div class="carousel-caption">
                                                <h4><i class="material-icons">tag_face</i> John Doe</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/img/default-user.png" class="img-responsive">
                                            <div class="carousel-caption">
                                                <h4><i class="material-icons">airline_seat_individual_suite</i> John Doe
                                                </h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="col-md-4">
                                        <a href="#">
                                            <img src="assets/img/default-user.png" class="img-responsive">
                                            <div class="carousel-caption">
                                                <h4><i class="material-icons">mood</i> John Doe</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>-->
                            </div>
                            <a class="left carousel-control" href="#teamCarousel" data-slide="prev">
                                <i class="material-icons black-icon">keyboard_arrow_left</i>
                            </a>
                            <a class="right carousel-control" href="#teamCarousel" data-slide="next">
                                <i class="material-icons black-icon">keyboard_arrow_right</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="title">
                <h2><strong>What We Do</strong></h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-nav-tabs">
                        <!--<div class="header header-info">-->
                        <div class="header">
                            <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-pills" data-tabs="tabs">
                                        <li class="active" style="width: 25%">
                                            <a href="#item1" data-toggle="tab">
                                                <i class="material-icons">face</i>
                                                Inaugural Meet & Greet
                                            </a>
                                        </li>
                                        <li style="width: 25%">
                                            <a href="#item2" data-toggle="tab">
                                                <i class="material-icons">chat</i>
                                                Blasts from the Past
                                            </a>
                                        </li>
                                        <li style="width: 25%">
                                            <a href="#item3" data-toggle="tab">
                                                <i class="material-icons">photo_camera</i>
                                                Gallery
                                            </a>

                                        </li>
                                        <li style="width: 25%">
                                            <a href="#item4" data-toggle="tab">
                                                <i class="material-icons">chat</i>
                                                Job Opportunities
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="item1">
                                    <p>On March 7, 2015, members of the Nigerian community in the London area met
                                        for the first time to deliberate on the relaunch of the Nigerian Association
                                        of London and Area in London, Ontario.</p>

                                    <blockquote>
                                        <p>Venue: Holiday Inn & Suites, 855 Wellington Road South</p>
                                        <p>Time: 2PM – 6PM</p>
                                        <small>To learn more, please contact the Interim Management Team.</small>
                                    </blockquote>
                                    <p><b>This event has now ended.</b></p>
                                </div>
                                <div class="tab-pane" id="item2">
                                    <p>In the early days, we had the Nigerian Association of London and Area. The
                                        association was vibrant and made several accomplishments. Some of these are
                                        chronicled in these pages.</p>
                                    <h5>President’s Messages in WAZOBIA Newsletters</h5>
                                    <a href="https://issuu.com/nigeriaassociation/docs/1993_babies_edition?e=15507290/11344199">
                                        <p>November 1993, 1993 Recession Babies</p></a>
                                    <a href="https://issuu.com/nigeriaassociation/docs/nov_1994?e=15507290/11344475">
                                        <p>November 1994, A severely handicapped race</p></a>
                                    <a href="https://issuu.com/nigeriaassociation/docs/dec_1994_86171dce926471?e=15507290/11344902">
                                        <p>December 1994, A Christmas Wish</p></a>
                                    <a href="https://issuu.com/nigeriaassociation/docs/feb_1995?e=15507290/11344984">
                                        <p>February 1995, A good year</p></a>
                                </div>
                                <div class="tab-pane" id="item3">
                                    <a href="gallery.php"><h3>Visit this page for our gallery.</h3></a>
                                </div>
                                <div class="tab-pane" id="item4">
                                    <a href="http://www.acfola.ca/career/"><h3>Job Opportunities from Acofola</h3></a>
                                    <div id="job-opportunities">
                                        <?php
                                        /*$page = new DomDocument;
                                        $page->validateOnParse = true;
                                        $page->loadHtml(file_get_contents('http://www.acfola.ca/career/'));

                                        echo $page->getElementById('content');*/
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section suggestion-section header-filter"
         style="width: 100%; background-image: url(assets/img/city1.jpg) ;">
        <div class="container">
            <div class="title text-center">
                <h2><strong>Contact Us</strong></h2>
                <hr>
                <small>Do you have useful suggestion(s) for us or do you think you do?</small>
                <small>If yes, please tell us below. We like to hear from you.</small>
            </div>
            <div class="row">
                <form class="form-email" action="" method="post" data-form-type="nob">
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
                            <textarea class="form-control form-input-message" placeholder="Your Message"
                                      rows="5"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-raised btn-success btn-lg">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="title text-center">
                <h2><strong>Find Us Here</strong></h2>
                <hr>
            </div>
        </div>
        <div id="google_map"></div>

    </div>
</div>

