<?php
   include 'partials/head.php';
   include 'partials/navbar.php';
   include 'utility/functions.php';
 ?>
<section id="page-cover">
    <section id="left-menu">
        <h4 class="page-header">Quick Links</h4>
        <ul class="list-group">
            <li class="list-group-item"><a href="#">All Media</a></li>
            <li class="list-group-item"><a href="#">All Audio</a></li>
            <li class="list-group-item"><a href="#">All Video</a></li>
            <li class="list-group-item"><a href="#">Live Stream</a></li>
        </ul>
        <h4 class="page-header">Genre</h4>
        <ul class="list-group">
            <li class="list-group-item"><a href="#">All</a></li>
            <?php getGenres(); ?>
        </ul>
        <h4 class="page-header">Search</h4>
        <section>
            <form action="" method="post" class="form-inline">
                <input type="search" placeholder="search..." class="form-control" name="q">
                <button type="submit" class="btn btn-primary">Go</button>
            </form>
        </section>

    </section>
    <section id="main-content">
        
    </section>
</section>
<?php
    include 'partials/footer.php';
?>

