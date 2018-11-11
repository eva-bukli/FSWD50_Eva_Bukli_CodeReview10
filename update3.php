       
<?php
include ("header.php");
include ("connect.php");
include ('change_media.php');

?><div class="container">
  <div class="row justify-content-md-center">
<br><br>
        <div class="col-lg-12 mt-4 mb-4">

    
        
          <form class="" action="update3.php" method="POST"><h2>Media</h2>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select the author</label>
              <select name="selecta" class="form-control" id="exampleFormControlSelect1">
                <?php 
                  $sql = "SELECT * FROM author";
                  $result = mysqli_query($conn, $sql);
                  $rows = $result->fetch_all(MYSQLI_ASSOC);
                    foreach ($rows as $row) { 
                ?>
                <option value=" <?php echo $row["author_id"]; ?> "><?php echo $row["first_name"]." ".$row["second_name"]; ?></option><?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select the author</label>
              <select name="selectp" class="form-control" id="exampleFormControlSelect1">
                <?php 
                  $sql = "SELECT * FROM publish";
                  $result = mysqli_query($conn, $sql);
                  $rows = $result->fetch_all(MYSQLI_ASSOC);
                    foreach ($rows as $row) { 
                ?>
                <option value=" <?php echo $row["publish_id"]; ?> "><?php echo $row["publisher_name"]; ?></option><?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Date of publishing</label>
              <input type="number" name="date" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Example select</label>
              <select name="typeid" class="form-control" id="exampleFormControlSelect1">
                <option value="1">book</option>
                <option value="2">cd</option>
                <option value="3">dvd</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Image URL</label>
              <input  type="text" name="img" class="form-control" id="exampleFormControlInput1" placeholder="http://img.jpg">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Short Description</label>
              <input   type="text" name="desc" class="form-control" id="exampleFormControlInput1" placeholder="Short escription">
            </div>
            <input class="btn btn-success"" type="submit" value="Upload" name="upload" />
            
          </form><br>


         
        </div><br><br>
</div></div>
        <?php include ("footer.php"); ?>