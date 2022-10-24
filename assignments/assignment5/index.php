<?php 
$output = "";
if(count($_POST) > 0){
    require_once 'folders.php';
    $Folder = new folders();
    $output = $Folder->addFolder();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
<body>
<div class="container-lg">
<h1>File and Directory Assignment</h1>
<p1>Enter folder name and contents of a file. Folder names should contain alphanumeric characters only.</p1> <br><br>
<p1><?php echo $output ?></p1> <br>

<form class="row g-3" method="post" action="index.php" >
    <label for="folderAddress" class="form-label">Folder Name</label>
    <input type="text" class="form-control" id="folderAddress" name="folder">

    <label for="fileContents" class="form-label">File Content</label>
    <textarea style="height: 500px;" class="form-control" id="fileContents" name="fileContents"></textarea>
    <div class="col-12">
<input type="submit" class="btn btn-primary" name="submit" value="Submit"></button>
</div>
</form>
</div>
</body>
</html>