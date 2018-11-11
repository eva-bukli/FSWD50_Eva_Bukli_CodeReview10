       
<?php
include ("header.php");
include ("connect.php");
include ('change_media.php');

?><div class="container">
  <div class="row justify-content-md-center">
<br><br>
        <div class="col-lg-12 mt-4 mb-4">

    
        <form class="" action="media.php" method="POST"><h2>Publisher</h2>
            <div class="form-group">
              <label for="exampleFormControlInput1">Publisher name</label>
              <input type="text" name="pname" class="form-control" id="exampleFormControlInput1" placeholder=" ">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Size</label>
              <select name="size" class="form-control" id="exampleFormControlSelect1">
                <option value="small">small</option>
                <option value="medium">medium</option>
                <option value="big">big</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Address</label>
              <input  type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder=" ">
            </div>
           <input class="btn btn-success"" type="submit" value="Upload" name="uploadp" />

        </form><br>

          <form class="" action="media.php" method="POST"><h2>Media</h2>
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


         <form class="" action="index.php" method="POST">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select</label>
              <select name="isbne" class="form-control" id="exampleFormControlSelect1">
                <?php 
          $sql = "SELECT * FROM media";
          $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $row) { 
        ?>
                <option value=" <?php echo $row["ISBN_code"]; ?> "><?php echo $row["ISBN_code"]; ?></option><?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" name="titlee" class="form-control" id="exampleFormControlInput1" placeholder="Title">
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
              <input  type="text" name="imge" class="form-control" id="exampleFormControlInput1" placeholder=" https://cdn.pixabay.com/photo/2018/10/07/11/49/fallow-deer-3729821_960_720.jpg">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Short Description</label>
              <input   type="text" name="desce" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $row["short_description"]; ?>">
            </div>
              
            <input class="btn btn-warning"" type="submit" value="Update" name="update" />
          </form>
<br>
          <form class="" action="index.php" method="POST">
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select ISBN code</label>
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