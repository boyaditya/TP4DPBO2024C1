<?php
include_once("conf.php");
include_once("models/Subscription.class.php");
include_once("views/Subscription.view.php");

class SubscriptionController
{
  private $subscription;

  function __construct()
  {
    $this->subscription = new Subscription(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index()
  {
    $this->subscription->open();
    $this->subscription->getSubscription();
    $data = array();
    while ($row = $this->subscription->getResult()) {
      array_push($data, $row);
    }

    $this->subscription->close();

    $view = new SubscriptionView();
    $view->render($data);
  }

  function createPage()
  {
    $view = new CreateSubscriptionView();
    $view->render();
  }

  function editPage($id)
  {
    $this->subscription->open();
    $this->subscription->getSubscriptionById($id);
    $data = $this->subscription->getResult();
    $this->subscription->close();

    $view = new EditSubscriptionView();
    $view->render($data);
  }


  function add($data)
  {
    $this->subscription->open();
    $this->subscription->add($data);
    $this->subscription->close();

    header("location:subscription.php");
  }

  function edit($data)
  {
    $this->subscription->open();
    $this->subscription->update($data);
    $this->subscription->close();

    header("location:subscription.php");
  }

  function delete($id)
  {
    $this->subscription->open();
    $this->subscription->delete($id);
    $this->subscription->close();

    header("location:subscription.php");
  }
}
