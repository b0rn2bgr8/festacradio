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
            <h3 class="page-header">Add Advert</h3>
            <form name="addEvent" action="add_advert.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <section class="form-group">
                    <label for="name" class="control-label">Title</label>
                    <input type="text" class="form-control" name="name">
                </section>
                <section class="form-group">
                    <label for="path" class="control-label">Upload File</label>
                    <input type="file" class="form-control" name="path">
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
    
    
    $name = $_POST['name'];
    
    $advert = $_FILES['path']['name'];
    $advert_tmp = $_FILES['path']['tmp_name'];
    
    move_uploaded_file($advert_tmp, "../media/advert/$advert");
    
    $insert_query = "insert into advert(name, image) values('$name', '$advert')";
    
    $insert_exec = mysqli_query($con, $insert_query);
    if ($insert_exec) {
        echo "<script>window.open('../admin/admin_home.php', '_self');</script>";
    }
}

