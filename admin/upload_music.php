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
            <h3 class="page-header">Music Upload</h3>
            <form action="upload_music.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
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
                    <label for="path" class="control-label">Year of Release</label>
                    <input type="date" class="form-control" name="date">
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
    $year = $_POST['date'];
    $keywords = $_POST['keywords'];
    
    $audio = $_FILES['path']['name'];
    $audio_tmp = $_FILES['path']['tmp_name'];
    
    move_uploaded_file($audio_tmp, "../media/audio/$audio");
    
    $insert_query = "insert into audio(title, artist, year, genre, path, keywords) values('$title', '$artist', '$year', '$genre', '$audio', '$keywords')";
    
    $insert_exec = mysqli_query($con, $insert_query);
    if ($insert_exec) {
        echo "<script>window.open('admin_home.php', '_self');</script>";
    }
}
