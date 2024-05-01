<!-- 
    Saya Boy Aditya Rohmaulana NIM 2203488 mengerjakan soal Tugas Praktikum 4 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
 -->

<?php
include_once("views/Template.view.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();

if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $members->delete($id);
} else {
    $members->index();
}
