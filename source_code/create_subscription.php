<?php
include_once("views/Template.view.php");
include_once("models/DB.class.php");
include_once("controllers/Subscription.controller.php");

$subscription = new SubscriptionController();

if (isset($_POST['submit'])) {
    //memanggil add
    $subscription->add($_POST);
} else {
    $subscription->createPage();
}
