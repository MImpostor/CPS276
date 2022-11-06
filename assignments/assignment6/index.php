<?php 
$output = "";
if(count($_FILES) > 0){
    require_once 'fileUploadProc.php';
    $output = manageUpload($_FILES['fileUpload'], $_POST);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 6 Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
<body>
<div class="container-lg">
<h1>File Upload</h1>
<p><a href="https://russet-v8.wccnet.edu/~mshigbee/CPS276/assignments/assignment6/listFilesProc.php" style="text-decoration: none">Show File List</a></p>
<p1><?php echo $output ?></p1> <br>

<form class="row g-3" method="post" action="index.php" enctype="multipart/form-data">
    <label for="fileName" class="form-label">File Name</label>
    <input type="text" class="form-control" id="fileName" name="fileName">

    <div class="col-6"><div class="col-6">
    <label for="fileUpload" class="form-label">File Upload</label>
    <input type="file" class="form-control" id="fileUpload" name="fileUpload"/>
</div></div>
    <div class="col-12">
<input type="submit" class="btn btn-primary" name="submit" value="Upload File"></button>
</div>
</form>
</div>
</body>
</html>