<?php 
require_once '../config/dbconfig.php';

//Une classe abstraite est une classe qui ne va pas pouvoir être instanciée directement, c’est-à-dire qu’on ne va pas pouvoir manipuler directement.
abstract class Crud extends DB
{
    protected $pdo;
    
    abstract public function insert();
    abstract public function update($id);

    public function find($id)
    {
        $sql = "SELECT*FROM $this->gîtes WHERE id = :idGîtes";
        $stmt = DB::prepare($sql);

        $stmt->bindValue(':idGîtes',$id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function findByVilla($villa){
        $sql= "SELECT*FROM $this->gîtes WHERE Gîtes = :villa";
        $stmt= DB::prepare($sql);

        $stmt->bindValue(':villa',$villa, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function findByChambre($chambre){
        $sql= "SELECT*FROM $this->gîtes WHERE Gîtes = :chambre";
        $stmt= DB::prepare($sql);

        $stmt->bindValue(':chambre',$chambre, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function findByMaison($maison){
        $sql= "SELECT*FROM $this->gîtes WHERE Gîtes = :maison";
        $stmt= DB::prepare($sql);

        $stmt->bindValue(':maison',$maison, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function findByChalet($chalet){
        $sql= "SELECT*FROM $this->gîtes WHERE Gîtes = :chalet";
        $stmt= DB::prepare($sql);

        $stmt->bindValue(':chalet',$chalet, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function findByAppartement($appartement){
        $sql= "SELECT*FROM $this->gîtes WHERE Gîtes = :appartement";
        $stmt= DB::prepare($sql);

        $stmt->bindValue(':appartement',$appartement, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function findAll()
    {
        $sql ="SELECT*FROM $this->gîtes";
        $stmt = DB::prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->gîtes WHERE id = :id";
        $stmt = DB::prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
}