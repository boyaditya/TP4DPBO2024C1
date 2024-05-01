<?php

class Subscription extends DB
{
    function getSubscription()
    {
        $query = "SELECT * FROM subscription";
        return $this->execute($query);
    }

    function getSubscriptionById($id)
    {
        $query = "SELECT * FROM subscription WHERE id='$id'";
        return $this->execute($query);
    }

    function add($data)
    {
        $type = $data['type'];
        $query = "insert into subscription values ('', '$type')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "delete FROM subscription WHERE id= '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data)
    {   
        $id = $data['id'];
        $type = $data['type'];

        $query = "update subscription set type='$type' where id='$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
