<h1 class="my-4">Big Library
  <small>Big List</small>
</h1>
<div class="mb-4">
  <div class="btn-group">
    <button id="all" type="button" class="btn btn-danger " >
      All
    </button>
  </div>
  <div class="btn-group">
    <button id="book" type="button" class="btn btn-danger " >
      Book
    </button>
  </div>
  <div class="btn-group">
    <button id="cd" type="button" class="btn btn-danger " >
      CD
    </button>
  </div>
  <div class="btn-group">
    <button id="dvd" type="button" class="btn btn-danger ">
      DVD
    </button>
  </div>
  
</div>
<div class="row">
  <?php 
  $sql = "SELECT * FROM media";
  $result = mysqli_query($conn, $sql);
  $rows = $result->fetch_all(MYSQLI_ASSOC);
  foreach ($rows as $row) { 
    ?>
    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item type<?php echo $row["type_id"]; ?>">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?php echo $row["img"]; ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?php echo $row["ISBN_code"].": ".$row["title"]; ?></a>
          </h4><p><b><?php echo $row["available"]; ?></b></p>
          <p class="card-text"><?php echo $row["short_description"]; ?></p>
          <form id="single" action='single-media.php' method='get' >
            <button class="btn btn-info" type="submit" name='id' value="<?php echo $row["ISBN_code"]; ?>">More..</button>
            <button class="btn btn-primary" type="submit" name='addcart' value="<?php echo $row["ISBN_code"]; ?>">Add to Cart</button>
          </form>
        </div>
      </div>
      </div><?php 
              }// loop ends
              
              ?>
            </div>
