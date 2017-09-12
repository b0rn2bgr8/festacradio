<?php
   include 'partials/head.php';
   include 'partials/navbar.php';
   include 'utility/functions.php';
 ?>
<section class="container" id="page">
    <?php
            include 'partials/sidemenu.php';
        ?>
    <section class="col-md-9 animated fadeInUp">
        <section>
            <h3 class="page-header">Genre</h3>
            <form name="genreForm" action="add_genre.php" method="POST" class="form-horizontal">
                <section class="form-group">
                    <label for="title" class="control-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </section>
                <section class="form-group">
                    <button class="btn btn-success" name="submit" type="submit">Upload</button>
                    <button class="btn btn-danger" type="reset">Clear</button>
                </section>
            </form>
        </section>
    </section>
</section>
<?php
    include 'partials/footer.php';
?>


<?php
include '../utility/db.php';

global $con;

if (isset($_POST['submit'])) {
    
    
    $title = $_POST['title'];

    $insert_query = "insert into genre(name) values('$title')";
    
    $insert_exec = mysqli_query($con, $insert_query);
    if ($insert_exec) {
        echo "<script>window.open('../index.php', '_self');</script>";
    }
}
