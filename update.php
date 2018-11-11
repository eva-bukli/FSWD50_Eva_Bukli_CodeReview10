       
<?php
include ("header.php");
include ("connect.php");
include ('change_media.php');

?><div class="container">
  <div class="row justify-content-md-center">
<br><br>
        <div class="col-lg-12 mt-4 mb-4">

          <form class="" action="update2.php" method="POST"> <h2>Author</h2>
            <div class="form-group">
              <label for="exampleFormControlInput1">First name</label>
              <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1" placeholder=" ">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Second name</label>
              <input type="text" name="second_name" class="form-control" id="exampleFormControlInput1" placeholder=" ">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Nationality</label>
              <input  type="text" name="nat" class="form-control" id="exampleFormControlInput1" placeholder=" ">
            </div>
           <input class="btn btn-success"" type="submit" value="Upload" name="uploada" />

        </form><br>

        
        </div><br><br>
</div></div>
        <?php include ("footer.php"); ?>