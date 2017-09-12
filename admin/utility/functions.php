<?php
 include './utility/db.php';

 function getGenres(){
     global $con;
     
     $query = "select * from genre";
     
     $run_query = mysqli_query($con, $query);
     
     while ($row_genre = mysqli_fetch_array($run_query)) {
         
         $name = $row_genre['name'];
         $id = $row_genre['id'];
         echo "<li class='list-group-item'><a href='index.php?id=$id'>$name</a></li>";
         
     }
 }
 function getGenresForm(){
     global $con;
     
     $query = "select * from genre";
     
     $run_query = mysqli_query($con, $query);
     
     while ($row_genre = mysqli_fetch_array($run_query)) {
         
         $name = $row_genre['name'];
         $id = $row_genre['id'];
         echo "<option value='$id'>$name</option>";
         
     }
 }
 
 function getArtistForm(){
     global $con;
                     
                     $artist_query = "select * from artist";
                     $run_artist = mysqli_query($con, $artist_query);
                     
                     while ($row_artist = mysqli_fetch_array($run_artist)) {
                         
                         $id = $row_artist['id'];
                         $name = $row_artist['firstname'] . " " . $row_artist['lastname'];
                         
                         echo "<option value='$id'>$name</option>";
                     }
 }

function getVideos(){
    global $con;
                     
                     $video_query = "select * from video order by date_added desc limit 5";
                     $run_video = mysqli_query($con, $video_query);
                     
                     while ($row_video = mysqli_fetch_array($run_video)) {
                         
                         $id = $row_video['id'];
                         $name = $row_video['title'];
                         $path = $row_video['path'];
                         $artist_id = $row_video['artist'];
                         $artist_query = "select firstname, lastname from artist where id = '$artist_id'";
                         $run_artist_query = mysqli_query($con, $artist_query);
                         
                         while($row_video = mysqli_fetch_row($run_artist_query)){
                         $d = $row_video[0] . " " . $row_video[1];
                         
                         echo "<section class='col-sm-3'><section class='panel panel-primary'>
                <section class='panel-heading'>
                    $name
                </section>
                <section class='panel-body'>
                    <video src='media/video/$path' controls='controls' class='img-responsive'></video>
                </section>
                <section class='panel-footer'>
                    Artist: $d
                </section>
            </section></section>";
                     }
                     }
}