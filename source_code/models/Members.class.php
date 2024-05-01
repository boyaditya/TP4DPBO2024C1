<?php

class Members extends DB
{
    function getMembers()
    {
        $query = "SELECT members.*, subscription.type 
              FROM members 
              JOIN subscription ON members.id_subscription = subscription.id ORDER BY members.id ASC";

        return $this->execute($query);
    }

    function getMembersById($id)
    {
        $query = "SELECT members.*, subscription.type 
              FROM members 
              JOIN subscription ON members.id_subscription = subscription.id 
              WHERE members.id='$id'";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $id_subscription = $data['type'];

        $query = "insert into members values ('', '$name', '$email', '$phone', now(), '$id_subscription')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "delete FROM members WHERE id= '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data)
    {   
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $id_subscription = $data['type'];

        $query = "update members set name='$name', email='$email', phone='$phone', id_subscription=$id_subscription where id='$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
