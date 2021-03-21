<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/details.css">
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
        <div class="savoies">
            <img src="asset/image/Logo.png" height="100px" alt="Logo annecy gite">
        </div>
        <!-- BUTTON ADMIN -->
        <div class="button">   
        </div>
    </div>
    <!-- FIN PREMIER BLOC -->
</header>
<!-- FIN HEADER -->
<!-- PREMIER BLOC -->
<div>
    <!-- BUTTON RETOUR -->
    <div class="button">
        <a href="index.php">
        <button  type="button">Retour</button>    
        </a>
    </div>
    <!-- TITRE ET ADRESSE -->
    <div class="margin">
        <div class="display">
            <div class="chalet color1">
               <p>Chalet des Etoiles - </p>    
            </div>
            <div class="personne color">
                <p>10 personnes/Chalet </p>    
            </div>
        </div>
        <div class="displays lieux">
            <div class="lieu">
               <img src="asset/image/lieux.png" height="25px" alt="lieux">  
            </div>
            <div class="adresse color1">
                <p>5 route de chevinois - 74000 Annecy</p>
            </div> 
        </div> 
    </div>
</div>
<!-- FIN PREMIER BLOC -->
<!-- DEUXIEME BLOC -->
<div class="display justify">
    <!--PHOTO CHALET -->
    <div class="image">
        <img src="asset/image/chalet.jpg" height="700px" alt="chalet">
    </div>
    <!-- FOND  -->
    <div class="fond formulaire">
        <!-- FORMULAIRE -->
        <div class="padding">
            <!-- TITRE RESERVATION -->
            <div class="reservation color1">
                <p>Reservation</p>
            </div>
            <!-- DATE -->
            <div>
                <div class="carre">
                    <input placeholder="arriver" type="date">
                </div>
                <div class="carre">
                    <input placeholder="depart" type="date">
                </div>
            </div>
            <!-- LISTE DE SELECTION DU NOMBRE DE PERSONNE -->
            <div class="carre">
                <select name="nombredepersonne" id="nombredepersonne">
                    <option value="">Nombre de personne</option>
                    <option value="1 personne">1 personne</option>
                    <option value="2 personne">2 personnes</option>
                    <option value="2 personne">3 personnes</option>
                    <option value="2 personne">4+ personnes</option>
                </select>
            </div>
            <!-- INPUT NOM -->
            <div class="carre">
                <input type="text" id="nom" name="nom" placeholder="Nom" >
            </div>
            <!-- INPUT PRENOM -->
            <div class="carre">
                <input type="text" id="prenom" name="prenom" placeholder="Prénom">
            </div>
            <!-- INPUT ADRESSE -->
            <div class="carre">
                <input type="text" id="adresse" name="adresse" placeholder="Adresse" >
            </div>
            <!-- INPUT CODE POSTAL -->
            <div class="carre">
                <input type="text" id="code postal" name="code postal" placeholder="Code Postal">
            </div>
            <!-- INPUT VILLE -->
            <div class="carre">
                <input type="text" id="ville" name="ville" placeholder="Ville">
            </div>
            <!-- INPUT TEL -->
            <div class="carre">
                <input type="text" id="tel" name="tel" placeholder="Téléphone">
            </div>
            <!-- INPUT EMAIL -->
            <div class="carre">
                <input type="text" id="email" name="email" placeholder="Email">
            </div>
            <!-- BUTTON RESERVATION -->
            <div class="button1">
                <button  type="button">RESERVATION</button>
            </div>
        </div>
        <!-- FIN FORMULAIRE -->
    </div>
    <!-- FIN FOND -->
</div>
<!-- FIN DEUXIEME BLOC -->
<!-- TROISIEME BLOC -->
<div class="display bloc">
    <!-- FOND -->
    <div class="fond">
        <!-- DESCRIPTION -->
        <div class="description">
            <h2>Description</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores voluptatum excepturi vero at iure consequatur, molestias adipisci maiores nesciunt. Ipsum obcaecati nobis neque quas repellendus iure enim deserunt dolorem aspernatur?</p>
        </div>
    </div>
    <!-- CRITERE -->
    <div class="critere">
        <div class="prix">
            <p>430 euros/sem</p>
        </div>
        <div class="fond padding">
            <div class="color1 capacite">
                <p>Capacité : 10</p>
                <p>Nombre de chambre : 5  </p>
                <p>Nombre de pieces : 9 </p>
                <p>Nombre de salle de bain : 4 </p>
                <p>Surface : 102m2</p>
                <p>Internet : Oui</p>
            </div>
        </div>
    </div>    
</div>
<!-- QUATRIEME BLOC -->
<div>
<div class="display equipement">
    <!-- EQUIPEMENT -->
    <div class="fond padding equipement1 ">
        <!-- TITRE -->
        <div>
            <h2>Equipement</h2>
        </div>
        <!-- JARDIN -->
        <div class="display">
            <div class="input">
                <input type="checkbox" id="Jardin" name="Jardin">
                <label for="Jardin">Jardin</label>
            </div>
            <!-- LAVE LINGE -->
            <div class="input">
                <input type="checkbox" id="Lave-Linge" name="Lave-Linge">
                <label for="Lave-Linge">Lave-Linge</label>
            </div>
        </div>
        <div class="display">
            <!-- WIFI -->
            <div class="input">
                <input type="checkbox" id="Wifi" name="Wifi">
                <label for="Wifi">Wifi</label>
            </div>
            <!-- MACHINE A RACLETTE -->
            <div class="input input1">
                <input type="checkbox" id="Machine à raclette" name="Machine à raclette">
                <label for="Machine à raclette">Machine à raclette</label>
            </div>
        </div>
    </div>
    <!-- EQUIPEMENT BIEN ETRE -->
    <div class="fond padding equipement1">
        <!-- TITRE -->
        <div>
            <h2>Equipement bien-être</h2>
        </div>

        <div class="display">        
            <!-- PISCINE -->
            <div class="input">
                <input type="checkbox" id="Piscine" name="Piscine">
                <label for="Piscine">Piscine</label>
            </div>
            <!-- SPA -->
            <div class="input">
                <input type="checkbox" id="Spa" name="Spa">
                <label for="Spa">Spa</label>
            </div>
        </div>
        <div class="display">
            <!-- SAUNA -->
            <div class="input">
                <input type="checkbox" id="Sauna" name="Sauna">
                <label for="Sauna">Sauna</label>
            </div>
        </div>
    </div>
</div>
<!-- FIN TROISIEME BLOC -->
</div>
<!-- FOOTER -->
<footer class="fond">
    <div class="contact color1">
        <div class="cont color1">
           <p>Contact</p>
        </div>
    <p>Tél : 06 45 79 58 63</p>
    <p>Mail : giteannecy@gmail.com</p>
        <div class="mention">
           <p>Mention légal</p>  
        </div>
    </div>
<!-- FIN FOOTER -->
</footer>
</body>
</html>