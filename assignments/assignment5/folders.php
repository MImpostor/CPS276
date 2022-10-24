<?php 

class folders{
    
    function addFolder() {
        $address = $_POST["folder"];
        $address = "./directories/" . $address;
        $file = $address . "/readme.txt";
        if (is_dir($address)) {
            return "<p>A directory with that name already exists.</p>";
        } else {
        mkdir($address);
        chmod($address, 0777);
        $handle = fopen($file, 'w');
        fwrite($handle, $_POST["fileContents"]);
        return '<p>File and directory were created.</p><br> <a href="/' . "~mshigbee/CPS276/assignments/assignment5/" . $file . '">Path where file is located</a><br>';}
    } 

}
?>