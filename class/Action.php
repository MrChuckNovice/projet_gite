<?php

require_once 'crud.php';

class Action extends Crud
{
    public function insert()
    {
        $sql = "INSERT INTO $this->gîtes (Gîtes) VALUES (:Gîtes)";
        $stmt = DB::prepare($sql);

        $stmt->bindValue(':Gîtes', $this->Gîtes, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update($id)
    {
        $sql = "UPDATE $this->gîtes SET Gîtes = :Gîtes WHERE id = :idGîtes";
        $stmt = DB::prepare($sql);

        $stmt->bindValue(':Gîtes', $this->Gîtes, PDO::PARAM_STR);
        $stmt->bindValue(':idGîtes', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
}





?>