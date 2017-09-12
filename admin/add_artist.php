<?php
   include 'partials/head.php';
   include 'partials/navbar.php';
   include 'utility/functions.php';
 ?>
<section class="container" id="page">
    <section class="row">
    <?php
            include 'partials/sidemenu.php';
        ?>
    <section class="col-md-9 animated fadeInUp">
        <section>
            <h3 class="page-header">Add New Artist</h3>
            <form action="add_artist.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <section class="form-group">
                    <label for="firstname" class="control-label">First Name</label>
                    <input type="text" class="form-control" name="firstname">
                </section>
                <section class="form-group">
                    <label for="lastname" class="control-label">Last Name</label>
                    <input type="text" class="form-control" name="lastname">
                </section>
                <section class="form-group">
                    <label for="path" class="control-label">Upload Picture</label>
                    <input type="file" class="form-control" name="path">
                </section>
                <section class="form-group">
                    <label for="bio" class="control-label">Bio</label>
                    <textarea class="form-control" name="bio"></textarea>
                </section>
                <section class="form-group">
                    <button class="btn btn-success" name="submit" type="submit">Upload</button>
                    <button class="btn btn-danger" type="reset">Clear</button>
                </section>
            </form>
        </section>
    </section>
    </section>
</section>
<?php
    include 'partials/footer.php';
?>


<?php
include 'utility/db.php';

global $con;

if (isset($_POST['submit'])) {
    
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $bio = $_POST['bio'];
    
    $image = $_FILES['path']['name'];
    $image_tmp = $_FILES['path']['tmp_name'];
    
    move_uploaded_file($image_tmp, "../media/image/$image");
    
    $insert_query = "insert into artist(firstname, lastname, bio, picture) values('$firstname', '$lastname', '$bio', '$image')";
    
    $insert_exec = mysqli_query($con, $insert_query);
    if ($insert_exec) {
        echo "<script>window.open('../index.php', '_self');</script>";
    }
}