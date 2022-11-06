<?php
require_once 'PdoMethods.php';
class Crud {

    public function addFile(String $name, String $path) {
        $pdo = new PdoMethods();
        
        $sql = "INSERT INTO assignment6 (fileName, filePath) value (:fileName, :filePath)";
        $bindings = [
            ['fileName', $name, 'str'],
            ['filePath', $path, 'str']
            ];

        $pdo->otherBinded($sql, $bindings);
    }

    public function getFiles(){
        $pdo = new PdoMethods();
        
        $sql = "SELECT fileName, filePath FROM assignment6";


        $records = $pdo->selectNotBinded($sql);

        /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
        if($records == 'error'){
            return 'There has been and error processing your request';
        }
        else {
            if(count($records) != 0){
                return $this->makeList($records);	
            }
            else {
                return 'no files found';
            }
        }
    }

    private function makeList($records){
        $output = "<ul>";
        foreach($records as $row){
            $output .= "<li> <a target='_blank' href=" . $row['filePath'] . ">" . $row['fileName'] . "</a></li>";
        }
        $output .= "</ul>";
		return $output;
    }
}

?>