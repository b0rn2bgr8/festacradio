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
        <section class="panel panel-primary">
     <?php
     
        global $con;
            if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $query_audio = "select * from audio where id = '$id'";
        $run_query = mysqli_query($con, $query_audio);
        
        while($row_audio = mysqli_fetch_array($run_query)){
            
            $name = $row_audio['title'];
            $path = $row_audio['path'];
            $a_id = $row_audio['artist'];
            
            $artist_query = "select * from artist where id = '$a_id'";
            $run_aquery = mysqli_query($con, $artist_query);
            while($row_aquery = mysqli_fetch_array($run_aquery)){
                $a_fname = $row_aquery['firstname'];
                $a_lname = $row_aquery['lastname'];
                $a_pic = $row_aquery['picture'];
                $a_bio = $row_aquery['bio'];
                
                echo "<section class='panel-heading'>$name</section>
                   <section class='panel-body' style='text-align: center;'>
                   <img src='media/image/$a_pic' class='img-responsive'>
                   <audio src='media/audio/$path' height='400' width='450' controls></audio>
                    <p><strong>Artist:</strong> $a_fname   $a_lname</p>
                    
                   </section>
                   <section class='panel-footer'>
                   <p>$a_bio</p>
                </section>
                  ";
            }
            
            
            
        }
        
    }
    ?>
        </section>
    </section>
</section>
<?php
    include 'partials/footer.php';
?>