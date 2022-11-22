<?php
$output = "";
if(count($_POST) > 0){
    require_once 'classes/DateTime.php';
    $output = findNotes($_POST);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" style="text-decoration: none"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
<body>
<div class="container-lg">
<h1>Display Note</h1>
<p><a href="https://russet-v8.wccnet.edu/~mshigbee/CPS276/assignments/assignment9/" style="text-decoration: none">Add Note</a></p>
<form class="row g-3" method="post" action="display.php">
<label for="begDate" class="form-label">Beginning Date</label>
<input type="date" class="form-control" id="begDate" name="begDate"> 
<label for="endDate" class="form-label">End Date</label>
<input type="date" class="form-control" id="endDate" name="endDate">
<div class="col-12">
<input type="submit" class="btn btn-primary" name="submit" value="Get Notes"></button>
</div>
</form>
<?php echo $output ?>

</div>
</body>
</html>