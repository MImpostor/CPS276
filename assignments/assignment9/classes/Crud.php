<?php
require_once 'PdoMethods.php';
class Crud {
    public function addNote(String $time, String $note) {
        $pdo = new PdoMethods();
        
        $sql = "INSERT INTO assignment9 (timestamp, note) value (:timestamp, :note)";
        $bindings = [
            ['timestamp', $time, 'int'],
            ['note', $note, 'str']
            ];
    
        $pdo->otherBinded($sql, $bindings);
    }

    public function getNotes(String $startDate, String $endDate) {
        $pdo = new PdoMethods();
        
        $sql = "SELECT timestamp, note FROM assignment9 WHERE timestamp BETWEEN :startDate AND :endDate";
        $bindings = [
            ['startDate', $startDate, 'int'],
            ['endDate', $endDate, 'int']
            ];

        $records = $pdo->selectBinded($sql, $bindings);

                /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
                if($records == 'error'){
                    return 'There has been and error processing your request';
                }
                else {
                    if(count($records) != 0){
                        return $this->makeTable($records);
                    }
                    else {
                        return 'no files found';
                }
            }
    }

    public function makeTable($records) {
        $output = "<table><tr><th>Date and Time</th><th>Note</th></tr>";
        foreach($records as $row){
            $output .= "<tr><td>" . date('m/d/y g:i A', $row['timestamp']) . "></td><td>" . $row['note'] . "</td></tr>";
        }
        $output .= "</table>";
		return $output;
    }
    
}

?>