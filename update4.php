       
<?php
include ("header.php");
include ("connect.php");
include ('change_media.php');

?><div class="container">
  <div class="row justify-content-md-center">
<br><br>
        <div class="col-lg-12 mt-4 mb-4">


         <form class="" action="update4.php" method="POST"><h2>Edit</h2>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select </label>
              <select name="isbne" class="form-control" id="exampleFormControlSelect1">
                <?php 
          $sql = "SELECT * FROM media";
          $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) { 
        ?>
                <option value=" <?php echo $row["ISBN_code"]; ?> "><?php echo $row["ISBN_code"]." - ".$row["title"]; ?></option><?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" name="titlee" class="form-control" id="exampleFormControlInput1" placeholder="new title">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select type</label>
              <select name="typeide" class="form-control" id="exampleFormControlSelect1">
                <option value="1">book</option>
                <option value="2">cd</option>
                <option value="3">dvd</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Image URL</label>
              <input  type="text" name="imge" class="form-control" id="exampleFormControlInput1" placeholder="new URL">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Short Description</label>
              <input   type="text" name="desce" class="form-control" id="exampleFormControlInput1" placeholder="new description">
            </div>
              
            <input class="btn btn-warning"" type="submit" value="Update" name="update" />
          </form>
<br>
          <form class="" action="update4.php" method="POST"><h2>Delete</h2>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Title</label>
              <select name="deleting" class="form-control" id="exampleFormControlSelect1">
                <?php 
                    foreach ($rows as $row) { 
                ?>
                <option value=" <?php echo $row["ISBN_code"]; ?> "><?php echo $row["title"]; ?></option><?php } ?>
              </select>
            </div>
            <input class="btn btn-danger"  type="submit" value="Delete" name="delete" />
          </form>
        </div><br><br>
</div></div>
        <?php include ("footer.php"); ?>