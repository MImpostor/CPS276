<?php 
if(count($_POST) > 0){
    require_once 'names.php';
    $addName = new names();
    $output = $addName->addName();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Name Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
<body>
<div class="container-lg">
<h1>Add Names</h1>

<form class="row g-3" method="post" action="index.php" >
<div class="col-12">
<input type="submit" class="btn btn-primary" name="add" value="Add Name"></button>
<input type="submit" class="btn btn-primary" name="clear" value="Clear Names"></button>
</div>
<label for="entername" class="form-label">Enter Name</label>
    <input type="text" class="form-control" id="entername" name="enter">

    <label for="nameList" class="form-label">List of Names</label>
    <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist" readonly><?php echo $output ?></textarea>
</form>
</div>
</body>
</html>