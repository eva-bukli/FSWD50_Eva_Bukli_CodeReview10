<?php 
          if(isset($_POST['upload'])) {
            $title = $_POST['title'];
            $img = $_POST['img'];
            $desc = $_POST['desc'];
            $typeid = $_POST['typeid'];
            $avai = "available";

              $sql = "INSERT INTO media (title,img,short_description,type_id, available)
              VALUES ('$title', '$img', '$desc', '$typeid', '$avai')";
              if (mysqli_query($conn, $sql)) {
                 echo "New record created.\n";
              } else {
                 echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
              }
            }

          if(isset($_POST['delete'])) {
            $isbn = $_POST['deleting'];

              $sql = "DELETE FROM media WHERE ISBN_code='$isbn'";
              if (mysqli_query($conn, $sql)) {
                   echo "Record deleted.\n";
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

            $sql = "UPDATE media SET title='$titlee', img='$imge', short_description='$desce', type_id='$typeide' WHERE ISBN_code='$isbne'";
            if (mysqli_query($conn, $sql)) {
               echo "Record updated.<br>\n";
            } else {
               echo "Update error for: " . $sql . "\n" . mysqli_error($conn);
            }
            
            }

         ?> 