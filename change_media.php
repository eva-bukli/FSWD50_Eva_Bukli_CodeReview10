<?php 
          if(isset($_POST['upload'])) {
            $title = $_POST['title'];
            $img = $_POST['img'];
            $desc = $_POST['desc'];
            $date = $_POST['date'];
            $typeid = $_POST['typeid'];
            $avai = "available";
            $publish =$_POST['selectp'];
            $author =$_POST['selecta'];
            

            //$autid = "SELECT author.author_id FROM author WHERE author.first_name = '$fname'";

              $sql = "INSERT INTO media (title,img,short_description,type_id, available,date, author_id,publish_id)
              VALUES ('$title', '$img', '$desc', '$typeid', '$avai','$date','$author','$publish')
             ";
              if (mysqli_query($conn, $sql)) {
                 echo "<h2 class='mt-4'>Successfully uploaded</h2>";
              } else {
                 echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
              }
            }

            if(isset($_POST['uploadp'])) {
            $pname = $_POST['pname'];
            $addr = $_POST['address'];
            $size = $_POST['size'];

              $sql = "INSERT INTO publish (publisher_name,address,size)
              VALUES ('$pname', '$addr','$size')";
              if (mysqli_query($conn, $sql)) {
                 echo "<h2 class='mt-4'>Successfully uploaded</h2>";
              } else {
                 echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
              }
            }

            if(isset($_POST['uploada'])) {
            $fname = $_POST['first_name'];
            $sname = $_POST['second_name'];
            $nat = $_POST['nat'];

              $sql = "INSERT INTO author (first_name,second_name,nationality)
              VALUES ('$fname', '$sname','$nat')";
              if (mysqli_query($conn, $sql)) {
                 echo "<h2 class='mt-4'>Successfully uploaded</h2>";
              } else {
                 echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
              }
            }

//$sql2 = "UPDATE `media` SET `author_id` = '$autid'" ;



          if(isset($_POST['delete'])) {
            $isbn = $_POST['deleting'];

              $sql = "DELETE FROM media WHERE ISBN_code='$isbn'";
              if (mysqli_query($conn, $sql)) {
                   echo "<h2 class='mt-4'>Successfully deleted</h2>";
                } else {
                   echo "Delete error for: " . $sql . "\n" . mysqli_error($conn);
                }
                
              }

          if(isset($_POST['update'])) {
            $titlee = $_POST['titlee'];
            $imge = $_POST['imge'];
            $desce = $_POST['desce'];
            $typeide = $_POST['typeide'];
            $isbne = $_POST['isbne'];
            $date = $_POST['date'];

            $sql = "UPDATE media SET title='$titlee', img='$imge', short_description='$desce', date='$date',type_id='$typeide' WHERE ISBN_code='$isbne'";
            if (mysqli_query($conn, $sql)) {
               echo "<h2 class='mt-4'>Successfully updated</h2>";
            } else {
               echo "Update error for: " . $sql . "\n" . mysqli_error($conn);
            }
            
            }
?> 