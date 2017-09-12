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
            <h3 class="page-header">Video Upload</h3>
            <form name="videoUpload" action="upload_video.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <section class="form-group">
                    <label for="title" class="control-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </section>
                <section class="form-group">
                    <label for="artist" class="control-label">Artist</label>
                    <select name="artist" class="form-control">
                    <?php
                     getArtistForm();
                    ?>
                        </select>
                </section>
                <section class="form-group">
                    <label for="genre" class="control-label">Genre</label>
                    <select name="genre" class="form-control">
                    <?php
                     getGenresForm();
                    ?>
                        </select>
                </section>
                <section class="form-group">
                    <label for="path" class="control-label">Upload File</label>
                    <input type="file" class="form-control" name="path">
                </section>
                <section class="form-group">
                    <label for="keywords" class="control-label">Keyword(s)</label>
                    <input type="text" class="form-control" name="keywords">
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
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $keywords = $_POST['keywords'];
    
    $video = $_FILES['path']['name'];
    $video_tmp = $_FILES['path']['tmp_name'];
    
    move_uploaded_file($video_tmp, "../media/video/$video");
    
    $insert_query = "insert into video(title, artist, genre, path, keywords) values('$title', '$artist', '$genre', '$video', '$keywords')";
    
    $insert_exec = mysqli_query($con, $insert_query);
    if ($insert_exec) {
        echo "<script>window.open('../index.php', '_self');</script>";
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

