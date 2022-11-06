<?php 
require_once "classes/Crud.php";
    $crud = new Crud;
    $output = $crud->getFiles(); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 6 File List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" style="text-decoration: none"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
<body>
<div class="container-lg">
<h1>List of Files</h1>
<p><a href="https://russet-v8.wccnet.edu/~mshigbee/CPS276/assignments/assignment6/" style="text-decoration: none">Add File</a></p>
<?php echo $output ?>

</div>
</body>
</html>