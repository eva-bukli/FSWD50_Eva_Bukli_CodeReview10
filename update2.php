       
<?php
include ("header.php");
include ("connect.php");
include ('change_media.php');

?><div class="container">
  <div class="row justify-content-md-center">
<br><br>
        <div class="col-lg-12 mt-4 mb-4">

    
        <form class="" action="update3.php" method="POST"><h2>Publisher</h2>
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

          
        </div><br><br>
</div></div>
        <?php include ("footer.php"); ?>