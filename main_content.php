<h1 class="my-4">Big Library
        <small>Big List</small>
      </h1>
      <div class="mb-4">
        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            All
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Book
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
              <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CD
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
              <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            DVD
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </div>
<div class="row">
        <?php 
          $sql = "SELECT * FROM media";
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
                
              ?>
        </div>
        <div class="col-lg-12 ">
          <form class="" action="index.php" method="POST">
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
                <?php foreach ($rows as $row) { ?>
                <option value=" <?php echo $row["ISBN_code"]; ?> "><?php echo $row["ISBN_code"]; ?></option><?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" name="titlee" class="form-control" id="exampleFormControlInput1" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Example select</label>
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
              <label for="exampleFormControlSelect1">Select</label>
              <select name="deleting" class="form-control" id="exampleFormControlSelect1">
                <?php 
                    foreach ($rows as $row) { 
                ?>
                <option value=" <?php echo $row["ISBN_code"]; ?> "><?php echo $row["title"]; ?></option><?php } ?>
              </select>
            </div>
            <input class="btn btn-danger"" type="submit" value="Delete" name="delete" />
          </form>
        </div>