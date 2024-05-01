<?php
class MembersView
{
  public function render($data)
  {
    $kolomTabel = '      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>JOINING DATE</th>
        <th>SUBSCRIPTION TYPE</th>
        <th>ACTIONS</th>
      </tr>';


    $dataMembers = null;
    foreach ($data as $val) {
      $dataMembers .= "<tr>
                <td>" . $val['id'] . "</td>
                <td>" . $val['name'] . "</td>
                <td>" . $val['email'] . "</td>
                <td>" . $val['phone'] . "</td>
                <td>" . $val['join_date'] . "</td>
                <td>" . $val['type'] . "</td>
                <td>
                <a href='edit_members.php?id=" . $val['id'] .  "' class='btn btn-warning''>Edit</a>
                <a href='index.php?id_hapus=" . $val['id'] . "' class='btn btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                </td>
                </tr>";
    }

    $linkAdd = 'create_members.php';

    $tpl = new Template("templates/home.php");
    $tpl->replace("DATA_TABEL", $dataMembers);
    $tpl->replace("KOLOM_TABEL", $kolomTabel);
    $tpl->replace("LINK_ADD", $linkAdd);
    $tpl->write();
  }
}

class CreateMembersView
{
  public function render($data)
  {
    $dataSubscription = null;
    foreach ($data as $subscription) {
      $dataSubscription .= '<option value="' . $subscription['id'] . '">' . $subscription['type'] . '</option>';
    }

    $dataForm =
      '<form method="post" action="create_members.php">
      <br><br>
      <div class="card">

        <div class="card-header bg-primary">
          <h1 class="text-white text-center"> Create New Member </h1>
        </div><br>

        <label> NAME: </label>
        <input type="text" name="name" class="form-control"> <br>

        <label> EMAIL: </label>
        <input type="text" name="email" class="form-control"> <br>

        <label> PHONE: </label>
        <input type="text" name="phone" class="form-control"> <br>

        <label> SUBSCRIPTION TYPE: </label>
         <select name="type" class="form-control">

         DATA_SUBSCRIPTION
         
         </select> <br>



        <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
        <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

      </div>
    </form>';



    $tpl = new Template("templates/form.php");
    $tpl->replace("DATA_FORM", $dataForm);
    $tpl->replace("DATA_SUBSCRIPTION", $dataSubscription);
    $tpl->write();
  }
}

class EditMembersView
{
  public function render($data)
  {
    $dataSubscription = null;
    foreach ($data['subscription'] as $subscription) {
      $selected = $subscription['id'] == $data['id_subscription'] ? 'selected' : '';
      $dataSubscription .= '<option value="' . $subscription['id'] . '" ' . $selected . '>' . $subscription['type'] . '</option>';
    }

    $dataForm = '<form method="post" action="edit_members.php">

      <br><br>
      <div class="card">

        <div class="card-header bg-warning">
          <h1 class="text-white text-center"> Update Member </h1>
        </div><br>

        <input type="hidden" name="id" value="' . $data['id'] . '" class="form-control"> <br>

        <label> NAME: </label>
        <input type="text" name="name" value="' . $data['name'] . '" class="form-control"> <br>

        <label> EMAIL: </label>
        <input type="text" name="email" value="' . $data['email'] . '" class="form-control"> <br>

        <label> PHONE: </label>
        <input type="text" name="phone" value="' . $data['phone'] . '" class="form-control"> <br>

        <label> SUBSCRIPTION TYPE: </label>
        <select name="type" class="form-control">

         DATA_SUBSCRIPTION
         
        </select> <br>


        <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
        <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

      </div>
    </form>';



    $tpl = new Template("templates/form.php");
    $tpl->replace("DATA_FORM", $dataForm);
    $tpl->replace("DATA_SUBSCRIPTION", $dataSubscription);
    $tpl->write();
  }
}
