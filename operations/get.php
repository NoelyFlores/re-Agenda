<?php

  if(isset($_POST['edit_contact'])){
    $id_edit=$_POST['edit_contact'];

    $agenda=Agenda::getOnlycode($id_edit);
    $array=$agenda->selectDatacode();
    $data=$array->fetch_array();
    $visibility_box="flex";
    $text_button="Update";
    $action_text_button="update";
    $text_action_title="Edit a contact";
  }else{
    $visibility_box="";
    $text_button="Save";
    $action_text_button="insert";
    $text_action_title="Create new contact";
  }
  if(isset($_POST['delete_contact'])){
    $id_delete=$_POST['delete_contact'];

    $agenda=Agenda::getOnlycode($id_delete);
    $array=$agenda->deleteAgenda();

  }

?>
