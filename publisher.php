<?php
include ("header.php");
include ("connect.php");
?>  <br><br>
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
      type.type_id,
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
      WHERE publish.publish_id='$pub'";

      $result = mysqli_query($conn, $sql);
      $rows = $result->fetch_all(MYSQLI_ASSOC);

      foreach ($rows as $row) { 
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo $row["img"]; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $row["ISBN_code"].": ".$row["title"]; ?></a>
              </h4><p><b><?php echo $row["available"]; ?></b></p>
              <p class="card-text"><?php echo $row["short_description"]; ?></p>
              <form id="single" action='single-media.php' method='get' >
                <button class="btn btn-info" type="submit" name='id' value="<?php echo $row["ISBN_code"]; ?>">More..</button>
              </form>
            </div>
          </div>
          </div><?php 
                }// loop ends
              }
              ?>
            </div>

          </div>
        </div>
        <?php  include ("footer.php");?>