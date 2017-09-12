<?php
   include 'partials/head.php';
   include 'partials/navbar.php';
   include 'utility/functions.php';
 ?>
<section id="page-cover">
    <section id="left-menu">
        <h4 class="page-header text-warning">Quick Links</h4>
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
        <h4 class="page-header text-warning">Search</h4>
        <section>
            <form action="" method="post" class="form-inline">
                <input type="search" placeholder="search..." class="form-control" name="q">
                <button type="submit" class="btn btn-primary">Go</button>
            </form>
        </section>

    </section>
    <section id="main-content">
        <?php
    include 'partials/live.php';
        ?>
    </section>
    <section class="col-md-6 col-md-offset-1">
        <form action="contact.php" class="form-horizontal" method="post">
            <section class="form-group">
                <label class="control-label" for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
            </section>
            <section class="form-group">
                <label class="control-label" for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </section>
            <section class="form-group">
                <label class="control-label" for="tel">Contact #</label>
                <input type="tel" class="form-control" name="tel" placeholder="Enter Phone Number">
            </section>
            <section class="form-group">
                <label class="control-label" for="tel">Message/Comment/Enquiries</label>
                <textarea class="form-control" name="message" placeholder="Message here"></textarea>
            </section>
            <section class="form-group">
                <button class="btn btn-success" name="submit-btn" type="submit">Submit</button>
                <button class="btn btn-primary" type="reset">Clear</button>
            </section>
        </form>
    </section>
</section>
<?php
    include 'partials/footer.php';
?>