

  	<?php
include ("header.php");
include ("connect.php");?>  
<div class="container">
  <div class="row justify-content-md-center"><?php
if(isset ($_GET['id']) ){
    $isbnn = $_GET['id'];

}$isbnn = $_GET['id'];
            
              $sql = "SELECT 
              media.ISBN_code, 
              media.title, 
              media.img,
              media.short_description,
              media.available,
              media.date,
              type.type_name,
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
              WHERE ISBN_code='$isbnn'";
              $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) { 



        ?>
        <div class="col-lg-6 portfolio-item mt-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo $row["img"]; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
              <a href="#"><?php echo $row["ISBN_code"].": ".$row["title"]." - ".$row["first_name"]." ".$row["second_name"]; ?></a>
              </h4><p><b>
              <?php echo 
               $row["type_name"]."<br>"
              .$row["available"]."<br><br>Publish date: "
              .$row["date"]."<br>Author: "
              .$row["first_name"]." ".$row["second_name"]."<br>Language: "
              .$row["nationality"]."<br><a>Publisher: "
              .$row["publisher_name"]."</a><br>"
//<a  href='' action='single-media.php' method='get' type='submit' name='pub' value=' ".$row['publish_id']."'>Publisher: ".$row["publisher_name"]."</a>
              ; ?></b></p>
              <p class="card-text"><?php echo "Description: ".$row["short_description"]; ?></p>
              
            </div>
          </div>
        </div><?php 
                }// loop ends
                


            	//echo $row["title"]. $row["type_name"]. $row["first_name"]; }

 
?></div>
          </div>  <?php  include ("footer.php");?>
