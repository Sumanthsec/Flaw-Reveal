<!DOCTYPE html>
<html>
<head>
  <style>
    label {
     display: inline-block;
  background-color: #007bff;
  color: #fff;
  border-radius: 3px;
  padding: 6px 12px;
  cursor: pointer;
    }
    label:hover {
  background-color: #0069d9;
}
    input[type=file] {
  display: block;
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
  background-color: #fff;
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
}

input[type=file]:hover {
  border-color: #aaa;
}

input[type=file]:focus {
  outline: none;
  border-color: #4d90fe;
  box-shadow: 0px 0px 5px rgba(77, 144, 254, 0.5);
}

    input[type=submit] {
      display: block;
  margin-top: 10px;
  padding: 6px 12px;
  background-color: #28a745;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
    }
    input[type=submit]:hover {
  background-color: #218838;
}
  </style>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <label for="file"><i class="fas fa-camera"></i> Choose File:</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload" name="submit">
  </form>
</body>
</html><?php

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    echo "File uploaded /uploads/".$_FILES["file"]["name"];
}
?>


