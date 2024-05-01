<?php
class SubscriptionView
{
  public function render($data)
  {
    $kolomTabel = '      <tr>
        <th>ID</th>
        <th>TYPE</th>
        <th>ACTIONS</th>
      </tr>';


    $dataSubscription = null;
    foreach ($data as $val) {
      $dataSubscription .= "<tr>
                <td>" . $val['id'] . "</td>
                <td>" . $val['type'] . "</td>
                <td>
                <a href='edit_subscription.php?id=" . $val['id'] .  "' class='btn btn-warning''>Edit</a>
                <a href='subscription.php?id_hapus=" . $val['id'] . "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                </td>
                </tr>";
    }

    $linkAdd = 'create_subscription.php';

    $tpl = new Template("templates/home.php");
    $tpl->replace("DATA_TABEL", $dataSubscription);
    $tpl->replace("KOLOM_TABEL", $kolomTabel);
    $tpl->replace("LINK_ADD", $linkAdd);
    $tpl->write();
  }
}

class CreateSubscriptionView
{
  public function render()
  {

    $dataForm = '<form method="post" action="create_subscription.php">
      <br><br>
      <div class="card">

        <div class="card-header bg-primary">
          <h1 class="text-white text-center"> Add New Subscription </h1>
        </div><br>

        <label> TYPE: </label>
        <input type="text" name="type" class="form-control"> <br>

        <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
        <a class="btn btn-info" type="submit" name="cancel" href="subscription.php"> Cancel </a><br>

      </div>
    </form>';



    $tpl = new Template("templates/form.php");
    $tpl->replace("DATA_FORM", $dataForm);
    $tpl->write();
  }
}

class EditSubscriptionView
{
  public function render($data)
  {

    $dataForm = '<form method="post" action="edit_subscription.php">

      <br><br>
      <div class="card">

        <div class="card-header bg-warning">
          <h1 class="text-white text-center"> Update Subscription </h1>
        </div><br>

        <input type="hidden" name="id" value="'. $data['id'] .'" class="form-control"> <br>

        <label> TYPE: </label>
        <input type="text" name="type" value="'. $data['type'] .'" class="form-control"> <br>


        <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
        <a class="btn btn-info" type="submit" name="cancel" href="subscription.php"> Cancel </a><br>

      </div>
    </form>';



    $tpl = new Template("templates/form.php");
    $tpl->replace("DATA_FORM", $dataForm);
    $tpl->write();
  }
}
