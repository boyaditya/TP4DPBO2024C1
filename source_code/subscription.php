<?php
include_once("views/Template.view.php");
include_once("models/DB.class.php");
include_once("controllers/Subscription.controller.php");

$subscription = new SubscriptionController();

if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $subscription->delete($id);
} else {
    $subscription->index();
}