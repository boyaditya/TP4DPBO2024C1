<?php
include_once("conf.php");
include_once("models/Members.class.php");
include_once("models/Subscription.class.php");
include_once("views/Members.view.php");

class MembersController
{
  private $members;
  private $subscription;

  function __construct()
  {
    $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    $this->subscription = new Subscription(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index()
  {
    $this->members->open();
    $this->members->getMembers();
    $data = array();
    while ($row = $this->members->getResult()) {
      array_push($data, $row);
    }

    $this->members->close();

    $view = new MembersView();
    $view->render($data);
  }

  function createPage()
  {
    $this->subscription->open();
    $this->subscription->getSubscription();
    $data = array();
    while ($row = $this->subscription->getResult()) {
      array_push($data, $row);
    }

    $view = new CreateMembersView();
    $view->render($data);
  }

  function editPage($id)
  {
    $this->members->open();
    $this->members->getMembersById($id);
    $data = $this->members->getResult();
    $this->members->close();

    $this->subscription->open();
    $this->subscription->getSubscription();
    $data['subscription'] = array();
    while ($row = $this->subscription->getResult()) {
      array_push($data['subscription'], $row);
    }

    $view = new EditMembersView();
    $view->render($data);
  }


  function add($data)
  { 
    $this->members->open();
    $this->members->add($data);
    $this->members->close();

    header("location:index.php");
  }

  function edit($data)
  {
    $this->members->open();
    $this->members->update($data);
    $this->members->close();

    header("location:index.php");
  }

  function delete($id)
  {
    $this->members->open();
    $this->members->delete($id);
    $this->members->close();

    header("location:index.php");
  }
}

