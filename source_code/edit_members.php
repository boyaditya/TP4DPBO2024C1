<?php
include_once("views/Template.view.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();

if (isset($_POST['submit'])) {
    //memanggil edit
    $members->edit($_POST);
} else {
    $members->editPage($_GET['id']);
}
