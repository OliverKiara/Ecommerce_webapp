
<?php


if(isset($_POST['submit'])){
    
    $newfileName = $_POST['filename'];

    if(empty($newfileName)){
        $newfileName = "gallery";
    }else{
        $newfileName = strtolower(str_replace(" ","-", $newfileName));
    }

    $itemprice = $_POST['itemprice'];
    $file = $_FILES['file'];

  $filename =$file["name"];
  $fileType=$file["type"];
  $fileTempName =$file["temp_name"];
  $fileError =$file["error"];
  $fileSize=$file["size"];

  $fileExt = explode(".", $filename);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array("jpg","jpeg","png");

  if(in_array($fileActualExt,$allowed)){
      if($fileError===0){
          if($fileSize < 200000){
          $imageFullName = $newfileName ."." . uniqid("",true) ."." . $fileActualExt;
          $fileDestination = "../img/" . $imageFullName;

          include '../database_connect.php';

          if(empty($itemprice)){
              header("Location: ../index.php?upload=empty");
              exit();

          }else{
              $sql = "SELECT * FROM products";
              $stmt = mysqli_stmt_init($connect);
              if(!mysqli_stmt_prepare($stmt,  $sql)){
                  echo "database error";
              }else{
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $rowCount = mysqli_num_rows($result);
                  $setImageOrder = $rowCount + 1;

                  $sql = "INSERT INTO products(name,image,price)VALUES(?,?,?);";
                  if(!mysqli_stmt_prepare($stmt,  $sql)){
                    echo "database error";
                }else{
                    mysqli_stmt_bind_param($stmt,"ssss",$itemprice,$imageFullName,$setImageOrder);
                    mysqli_stmt_execute($stmt);

                    move_uploaded_file($fileTempName, $fileDestination);

                    header("Location: ../index.php?upload=empty");
                }
              }
          }

          }else{
              echo "filesize is too big maximum upload is 20mb";
          }

      }else{
          echo "check your upload";
          exit();
      }

  }else{
      echo "Enter a valid file extension";
      exit();
  }

}