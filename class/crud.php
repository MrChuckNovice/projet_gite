<?php 
include_once 'config/dbconfig.php';
class Crud extends DB
{
   public $table='gîtes';

    public function showData(){

        $sql="SELECT * From gîtes";
        $query=$this->connexion->query($sql) or die("echec!");

        while($result = $query->fetch(PDO::FETCH_ASSOC)){
            $data[]=$result;
        }
        return $data;
    }
    
    public function getById($id,$table){
       
        $sql="SELECT * FROM $table WHERE id = :idGîtes";
        $query = $this->connexion->prepare($sql);
        $query->execute(array(':idGîtes'=>$idGîtes));
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function update($idGites,$Gîtes,$nom,$nombredepersonne,$nombredechambres,$nombredesalledebains,$adresses,$Prix,$Jardin,$LaveLinge,$Wifi,$MachineàRaclette,$table){
        $sql= "UPDATE $table SET Gîtes=:Gîtes,nom=:nom,nombredepersonne=:nombredepersonne,nombredechambres=:nombredechambres,nombredesalledebains=:nombredesalledebains,adresses=:adresses,Prix=:Prix,Jardin=:Jardin,LaveLinge=:LaveLinge,Wifi=:Wifi,MachineàRaclette=:MachineàRaclette Where id=:idGîtes";
        $query = $this->connexion->prepare($sql);
        $query->execute(array(':idGîtes'=>$idGîtes,':Gîtes'=>$Gîtes,':nom'=>$nom,':nombredepersonne'=>$nombredepersonne,':nombredechambres'=>$nombredechambres,':nombredesalledebains'=>$nombredesalledebains,':adresses'=>$adresses,':Prix'=>$Prix,':Jardin'=>$Jardin,':LaveLinge'=>$LaveLinge,':Wifi'=>$Wifi,':MachineàRaclette'=>$MachineàRaclette));
        return true;
    }

    public function insertData($Gîtes,$nom,$nombredepersonne,$nombredechambres,$nombredesalledebains,$adresses,$Prix,$Jardin,$LaveLinge,$Wifi,$MachineàRaclette,$table){
        $sql= "INSERT INTO $table SET Gîtes=:Gîtes,nom=:nom,nombredepersonne=:nombredepersonne,nombredechambres=:nombredechambres,nombredesalledebains=:nombredesalledebains,adresses=:adresses,Prix=:Prix,Jardin=:Jardin,LaveLinge=:LaveLinge,Wifi=:Wifi,MachineàRaclette=:MachineàRaclette Where id=:idGîtes";
        $query = $this->connexion->prepare($sql);
        $query->execute(array(':Gîtes'=>$Gîtes,':nom'=>$nom,':nombredepersonne'=>$nombredepersonne,':nombredechambres'=>$nombredechambres,':nombredesalledebains'=>$nombredesalledebains,':adresses'=>$adresses,':Prix'=>$Prix,':Jardin'=>$Jardin,':LaveLinge'=>$LaveLinge,':Wifi'=>$Wifi,':MachineàRaclette'=>$MachineàRaclette));
        return true;
    } 
    public function deleteData($id,$table){
        $sql="DELETE FROM $table WHERE id=:idGîtes";
        $query= $this->connexion->prepare($sql);
        $query->execute(array(':idGîtes'=>$id));
        return true;
    }
}
?>