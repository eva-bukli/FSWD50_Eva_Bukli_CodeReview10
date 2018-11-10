<?php
include ("header.php");
include ("connect.php");
?>  
<div class="container">
  <div class="row justify-content-md-center">

<?php 
if(isset ($_GET['pub'])) {
  
  $pub = $_GET['pub'];
    $sql = "SELECT 
              media.ISBN_code, 
              media.title, 
              media.img,
              media.short_description,
              media.available,
              media.date,
              media.type,
              type.type_name,
              author.first_name,
              author.second_name,
              author.nationality,
              publish.publish_id,
              publish.publisher_name,
              publish.size,
              publish.address
             FROM media 
             INNER JOIN type ON type.type_id=media.type_id
             INNER JOIN author ON author.author_id=media.author_id
             INNER JOIN publish ON publish.publish_id=media.publish_id 
             WHERE publish_id='$pub'";

            $result = mysqli_query($conn, $sql);
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            foreach ($rows as $row) { 
         
           echo $row["title"];  
       }     
           
}?>

 
</div>
          </div> 
           <?php  include ("footer.php");?>