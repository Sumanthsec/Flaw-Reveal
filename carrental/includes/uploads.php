<?php
error_reporting(0);
$name=$_FILES['myfile']['name'];
$tmp_name=$_FILES['myfile']['tmp_name'];
if(move_uploaded_file($tmp_name,$name))
{
	echo"files are uploaded";
}
else
{
	echo"files not uploaded";
}

?>


<form action="upload.php" method="POST" enctype="multipart/form-data" class="upload-form">
  <label for="fileToUpload" class="custom-file-upload">
    <i class="fas fa-cloud-upload-alt"></i> Choose File
  </label>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload" name="submit" class="submit-btn">
</form>

<style>
.custom-file-upload {
  display: inline-block;
  background-color: #007bff;
  color: #fff;
  border-radius: 3px;
  padding: 6px 12px;
  cursor: pointer;
}

.custom-file-upload:hover {
  background-color: #0069d9;
}

.submit-btn {
  display: block;
  margin-top: 10px;
  padding: 6px 12px;
  background-color: #28a745;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.submit-btn:hover {
  background-color: #218838;
}
</style>

