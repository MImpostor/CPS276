<?php
$output = "";
if(count($_POST) > 0){
    require_once 'classes/DateTime.php';
    $output = addToTable($_POST);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 9 Add Note</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" style="text-decoration: none"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
<body>
<div class="container-lg">
<h1>Add Note</h1>
<p><a href="https://russet-v8.wccnet.edu/~mshigbee/CPS276/assignments/assignment9/display.php" style="text-decoration: none">Display Notes</a></p>
<?php echo $output ?>
<br>
<form class="row g-3" method="post" action="index.php">
    <label for="dateTime" class="form-label">Date and Time</label>
    <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">

    <label for="noteText" class="form-label">Note</label>
    <textarea style="height: 500px;" class="form-control" id="noteText" name="noteText"></textarea>

    <div class="col-12">
<input type="submit" class="btn btn-primary" name="submit" value="Add Note"></button>
</div>

</div>
</form>
</div>
</body>
</html>
