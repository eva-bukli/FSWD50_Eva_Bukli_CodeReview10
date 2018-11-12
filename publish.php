<?php
include ("header.php");
include ("connect.php");
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-lg-12">
      
      <div class="mt-4 mb-4">
        
        <form action='publisher.php' method='get' >
         <?php
         $sql = "SELECT 
         
         publish.publish_id,
         publish.publisher_name,
         publish.size,
         publish.address
         FROM publish
         ";
         $result = mysqli_query($conn, $sql);
         $rows = $result->fetch_all(MYSQLI_ASSOC);
         foreach ($rows as $row) { 

          ?>
          
          <button class=' my-1 btn btn-info' type='submit' name='pub' value=" <?php echo $row['publish_id']?>"><?php echo $row['publisher_name']?></button>
          
          
          <?php 
        }
        ?></form></div>
      </div></div>
    </div> </div> 


    <?php
    include ("footer.php");
    ?>
