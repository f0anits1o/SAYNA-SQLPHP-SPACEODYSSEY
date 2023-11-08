<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

        <div class="menu">
            <h1>Dashbord</h1>
            <ul>
                <a href="#"><img src="img/user.svg" alt="">Suivi des missions</a>
                <a href="gestionMissions.html"><img src="img/user.svg" alt="">Gestion des missions</a>
                <a href="gestionAstro.html"><img src="img/user.svg" alt="">Gestions des Astronautes</a>
            </ul>
        </div>

        <div class="head-main">
            
            <div class="header">
                <h2><a href="#">Home</a></h2>
                <img src="img/alarm.svg" class="icons" id="alarm" alt="">
                <img src="/img/user.svg" class="icons" id="user" alt="">
            </div>

            <div class="main">
                <form action="creer.php" method="POST">
                    <div class="form1">
                        <h2>Planète</h2>
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="inputbox" id="">
                        <br>
                        <label for="">Description</label>
                        <input type="text" name="description" class="inputbox" id="">
                        <br>
                        <label for="">Distance entre la planète et la terre</label>
                        <input type="number" name="distance entre la planete et la terre" class="inputbox" id="">
                        <br>
                        <label for="">Circonférence</label>
                        <input type="number" name="circonference" class="inputbox" id="">
                        <br><br>
                        <input type="submit" value="Créer" name="submit" id="submit">
                        <a href="ajout.php"></a>
                    </div>
                </form>

                <form action="creer.php" method="POST">
                    <div class="form2">
                        <h2>Missions</h2>
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="inputbox" id="">
                        <br>
                        <label for="">Date de debut</label>
                        <input type="date" name="date de debut" class="inputbox" id="">
                        <br>
                        <label for="">Date de fin</label>
                        <input type="date" name="date de fin" class="inputbox" id="">
                        <br>
                        <label for="">Status</label>
                        <input type="text" name="status" class="inputbox" id="">
                        <br><br>
                        <input type="submit" value="Créer" name="submit" id="submit">
                        <a href="ajout.php"></a>
                    </div>
                </form>

                <form action="creer.php" method="POST">
                    <div class="form3">
                        <h2>Vaisseau</h2>
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="inputbox" id="">
                        <br>
                        <label for="">Capacité</label>
                        <input type="text" name="capacite" class="inputbox" id="">
                        <br><br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br><br>
                        <input type="submit" value="Créer" name="submit" id="submit">
                        <a href="ajout.php"></a>
                    </div>
                </form>

                <form action="creer.php" method="POST">
                    <div class="form4">
                        <h2>Astronautes</h2>
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="inputbox" id="">
                        <br>
                        <label for="">Etat de santé</label>
                        <input type="text" name="etat de sante" class="inputbox" id="">
                        <br>
                        <label for="">Poids</label>
                        <input type="text" name="poids" class="inputbox" id="">
                        <br>
                        <label for="">Taille</label>
                        <input type="text" name="taille" class="inputbox" id="">
                        <br><br>
                        <input type="submit" value="Créer" name="submit" id="submit">
                        <a href="ajout.php"></a>
                    </div>
                </form>

               
                <div class="footer"></div>
            </div>
        </div>
        
    </div>
</body>
</html>