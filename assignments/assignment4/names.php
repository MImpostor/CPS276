<?php 

class names{
    var $arr = array();
    function addName() {
        if (isset($_POST['clear'])) {
            return "";
        } else {
            $nameArr = explode(" ", $_POST["enter"]);
            $trueName = $nameArr[1] . ", " . $nameArr[0] . "\n";
        $arr = explode("\n", $_POST["namelist"]);
        array_push($arr, $trueName);
        sort($arr);
        $nameString="";

        for ($i=0; $i<count($arr); $i++) {
            $nameString .= $arr[$i];
        }
        return $nameString;
        }
    }

}
?>