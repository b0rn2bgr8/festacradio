<?php
   include 'partials/head.php';
   include 'partials/navbar.php';
   include 'utility/functions.php';
 ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1186470898148080";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section id="landing">
    <center>
        <img src="img/logo.png" id="img-hdr" class="img-responsive animated bounceIn">
        <h1 class="animated bounceIn">Festac Radio Online</h1>
        <p class="animated fadeInUp">Keeping you fully entertained</p>
        <section>
            <a href="#" class="btn btn-default btn-lg animated fadeInUp" id="landing-btn"><i class="fa fa-compass"></i> Explore</a>
            <a href="#" class="btn btn-default btn-lg animated fadeInUp" id="landing-btn"><i class="fa fa-rss"></i> Connect</a>
            <a href="#liveStream" class="btn btn-default btn-lg animated fadeInUp" id="landing-btn"><i class="fa fa-tv"></i> Live Stream</a>
        </section>
    </center>
</section>
<!--<section id="liveStream">
        <center>
             <h1 class="page-header text-warning">Live Festac Radio Stream</h1>   
        </center>
        <section>
            <?php 
   include 'partials/live.php';
   ?>
        </section>
</section>-->
<section id="page-cover">
    <section class="col-md-2 animated fadeInLeft">
        <h3 class="page-header text-warning">Quick Links</h3>
    
        <ul class="list-group">
            <li class="list-group-item"><a href="#">All Media</a></li>
            <li class="list-group-item"><a href="#">All Audio</a></li>
            <li class="list-group-item"><a href="#">All Video</a></li>
            <li class="list-group-item"><a href="#">Live Stream</a></li>
        </ul>
        <h4 class="page-header text-warning">Genre</h4>
        <ul class="list-group">
            <li class="list-group-item"><a href="#">All</a></li>
            <?php getGenres(); ?>
        </ul>

    </section>
    <section class="col-md-7">
        <h3 class="page-header text-warning">Recent Songs</h3>
        <section class="row">
            <section class="col-md-4">
                <section class="panel panel-primary">
                    <section class="panel-heading">NEW SONG DOWNLOAD</section>
                    <section class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php getAudioTbl(); ?>
                            </tbody>
                        </table>
                    </section>
                </section>
            </section>
            <section class="col-md-4">
                <section class="panel panel-primary">
                    <section class="panel-heading">VIDEO OF THE WEEK</section>
                    <section class="panel-body">
                        <video src=""></video>
                    </section>
                </section>
            </section>
            <section class="col-md-4">
                <section class="panel panel-primary">
                    <section class="panel-heading">SPOTLIGHT</section>
                    <section class="panel-body">
                        <a href="#">
                            <img src="">
                        </a>
                    </section>
                </section>
            </section>
        </section>
        <section class="clearfix"></section>
            <section class="row">
                <h3 class="page-header text-warning">Upcoming Events</h3>
                <section id="event-slider"></section>
            </section>
        <section class="clearfix"></section>
        <section class="row">
            <h3 class="page-header text-warning">Connect With Us</h3>
            <section class="col-md-5">
                <section class="panel panel-primary">
                    <section class="panel-heading">SEND US YOUR FEEDBACK</section>
                    <section class="panel-body">
                        <form id="feedbackForm" class="form-horizontal" action="index.php" method="post">
                            <section class="form-group">
                                <label class="control-label" for="name">Name:</label>
                                <input type="text" class="form-control" name="name">
                            </section>
                            <section class="form-group">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" class="form-control" name="email">
                            </section>
                            <section class="form-group">
                                <label class="control-label" for="feedback">Feedback:</label>
                                <textarea class="form-control" name="feedback"></textarea>
                            </section>
                            <section class="form-group">
                                <button type="submit" class="btn btn-primary">Send Feedback</button>
                            </section>    
                        </form>
                    </section>
                </section>
            </section>
            <section class="col-md-7">
                <section class="panel panel-primary">
                    <section class="panel-heading">ADVERTS</section>
                    <section class="carousel slides" id="myCarousel" data-ride="slide">
                        <section class="carousel-inner" role="listbox">
                            <?php
                            
                            ?>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <section class="col-md-3">
        <h3 class="page-header text-warning">Social Media Corner</h3>
        <section>
        <div class="fb-page" data-href="https://web.facebook.com/festacradioonline/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
        </section>
        <section id="twt">
            <h3 class="page-header text-warning">#Tweets</h3>
        <a class="twitter-timeline" href="https://twitter.com/FestacRadio77">Tweets by FestacRadio77</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </section>
            <section id="insta">
                
            </section>
    </section>
</section>
<?php
    include 'partials/footer.php';
?>

