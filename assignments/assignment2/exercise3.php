<?php
$title = "Exercise 3";

$body = "<table border=\"1\">";

for ($i = 1; $i<= 15; $i++){ // table rows
	$body .= "<tr> ";
    for ($j = 1; $j<=5; $j++){ // cells
        $body .= "<td> Row " . $i . " Cell " . $j . "</td>";
    }
    $body .= "</tr>";
};
$body .= "</table>";

?>

<!DOCTYPE html>
<head>
<title> <?php echo $title; ?> </title>
</head>
<body>
<?php echo $body; ?>
</body>
</html>