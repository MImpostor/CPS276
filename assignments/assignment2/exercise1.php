<?php
$title = "Exercise 1";

$body = "<ul>";

for ($i = 1; $i<= 4; $i++){
	$body .= "<li>" . $i . "</li> <ul>";
    for ($j = 1; $j<=5; $j++){
        $body .= "<li>" . $j . "</li>";
    }
    $body .= "</ul>";
};
$body .= "</ul>";

?>

<!DOCTYPE html>
<head>
<title> <?php echo $title; ?> </title>
</head>
<body>
<?php echo $body; ?>
</body>
</html>