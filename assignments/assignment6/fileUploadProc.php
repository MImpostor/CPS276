<?php 

function manageUpload($file, $post) {
    if ($file['type'] != "application/pdf"){
        return "You need to upload a PDF";
    }
    if ($file['size'] > 100000) {
        return "File size must be under 100000 bytes";
    }
    if (count($post) == 0){
        return "File needs a name";}
    require_once 'classes/Crud.php';
    move_uploaded_file($file['tmp_name'], "./files/" . $post['fileName']);
    $crud = new Crud;
    $crud->addFile($post['fileName'], "./files/".$post['fileName']);
    return "Note added successfully";
    }
?>