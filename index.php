<?php
require_once('config/dbconfig.php');
require_once('class/crud.php');
$obj = new Crud;


if(isset($_REQUEST['status'])){
    echo" Vos Données ont été mis à jour";
}
if(isset($_REQUEST['status_insert'])){
    echo" Vos Données ont été inséré avec succes";
}
if(isset($_REQUEST['del_id'])){
if($obj->deleteData($_REQUEST['del_id'],"gîtes")){
         echo"Vos Données ont été supprimé avec succes";
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/dashboard.css">
    <title>Giteannecy</title>
</head>
<body>
    <!-- DEBUT HEADER -->
    <header>
        <!-- 1ER BLOC -->
        <div class="between fond">
            <!-- LOGO HAUTE SAVOIE -->
            <div class="savoie">
                <img src="asset/image/savoie.png" height="100px" alt="logo de la savoie">
            </div>
            <!-- LOGO ANNECY GITE -->
            <div class="savoie">
                <img src="asset/image/Logo.png" height="100px" alt="Logo annecy gite">
            </div>
            <!-- BUTTON ADMIN -->
            <div class="button">
                <button  type="button">Deconnexion</button>
            </div>
        </div>
        <!-- FIN PREMIER BLOC -->
    </header>
    <!-- BOUTTON AJOUTER -->
    <div class="button margin">
        <button  type="button" href="create.php">Ajouter</button>
    </div>
    <!-- TABLEAU -->
    <table class="table">
        <thead>
          <tr class="color">
            <th scope="col">ID</th>
            <th scope="col">Type Gîtes</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nb de personnes</th>
            <th scope="col">Nb de chambres</th>
            <th scope="col ">Nb de salles de bains</th>
            <th scope="col">Adresse </th>
            <th scope="col">Prix</th>
            <th scope="col">Disponibilité</th>
            <th scope="col">Lavelinge</th>
            <th scope="col">Photo</th>
            <th scope="col">Equipement</th>
            <th colspan="2">Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php
            foreach($obj->showData('gîtes') as $value){
                 extract($value);
          echo"<tr>";
          echo"<td>".$value['idGîtes']."</td>";
          echo"<td>".$value['Gîtes']."</td>";
          echo"<td>".$value['nom']."</td>";
          echo"<td>".$value['nombredepersonne']."</td>";
          echo"<td>".$value['nombredechambres']."</td>";
          echo"<td>".$value['nombredesalledebains']."</td>";
          echo"<td>".$value['adresses']."</td>";
          echo"<td>".$value['Prix']."</td>";
          echo"<td>".$value['Jardin']."</td>";
          echo"<td>".$value['LaveLinge']."</td>";
          echo"<td>".$value['Wifi']."</td>";
          echo"<td>".$value['MachineàRaclette']."</td>";
          echo'<td class="action">
                <button class="btn btn-danger btn-sm," type="button" href="read.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
                
                <button class="btn btn-danger btn-sm, far fa-trash-alt bi bi-pencil-square"  type="button" href=\"update.php?id=$value[id]\">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </button>
                <button class="btn btn-danger btn-sm," type="button" href=\"index.php?del_id=$value[id]\">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </button>
            </td>';
        }
        ?>
        </tbody>
    </table>
    <!-- FIN TABLEAU -->
    <!-- FOOTER -->
    <footer class="fond">
        <div class="contact color1">
            <div class="mention">
               <p>Mention légal</p>  
            </div>
        </div>
    </footer>
    <!-- FIN DU FOOTER -->
</body>
</html>