<?php

    function addToTable($post) {
        if (empty($post['dateTime'])) {
            return "You must enter a date";}
        if (empty($post['noteText'])) {
            return "You must enter a note";}
        $note = $post['noteText'];
        $timestamp = strtotime(str_replace("T"," ", $post['dateTime']));
        require_once 'Crud.php';
        $crud = new Crud;
        $crud->addNote($timestamp, $note);
        return "Note added successfully";
        
    }

    function findNotes($post) {
        $start = strtotime($post['begDate']);
        $end = strtotime($post['endDate']);
        require_once 'Crud.php';
        $crud = new Crud;
        return $crud->getNotes($start, $end);
    }



?>