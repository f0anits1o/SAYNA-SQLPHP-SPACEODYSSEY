<?php
include "database.php";

if(isset($_POST['submit'])){
    $nom_planete = $_POST['nom_planete'];
    $description = $_POST['description'];
    $distance_terre = $_POST['distance_terre'];
    $circonference = $_POST['circonference'];
    $id_planete = $distance_terre.$circonference;
    $req = $db->prepare("INSERT INTO planete values (?,?,?,?,?)");
    $req->execute([$id_planete,$nom_planete,$description,$distance_terre,$circonference]);

    $nom_tache = $_POST['nom_tache'];
    $id_tache = $nom_tache;

    $req1 = $db->prepare("INSERT INTO tache values (?,?)");
    $req1->execute([$id_tache,$nom_tache]);

    $date_debut =$_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $date = date('d-m-y');
    $nom_mission = $_POST['nom_mission'];
    $id_date = $date_debut.$nom_mission;
    $req2 = $db->prepare("INSERT INTO dates values (?, ?, ?)");
    $req2->execute([$id_date, $date_debut, $date_fin]);


    $status = $_POST['status'];
    $id_mission = $nom_mission;
    $req3 = $db->prepare("INSERT INTO mission values (?, ?, ?, ?)");
    $req3->execute([$id_mission, $nom_mission,$status, $id_date ]);

    $req6 =$db->prepare("INSERT INTO mission_planete values (?,?)");
    $req6->execute([$id_planete, $id_mission]);

    $nom_vaisseau = $_POST['nom_vaisseau'];
    $capacite = $_POST['capacite'];
    $id_vaisseau = $nom_vaisseau;
    $req4 = $db->prepare("INSERT INTO vaisseau values (?, ?, ?, ?)");
    $req4->execute([$id_vaisseau, $nom_vaisseau,$capacite, $id_mission]);

    $nom_astronaute = $_POST['nom_astronaute'];
    $etat_sante = $_POST['etat_sante'];
    $_poids = $_POST['poids'];
    $_taille = $_POST['taille'];
    $sexe = $_POST['sexe_astro'];
    $annee_serv = $_POST['annee_serv'];
    $id_astronaute = $id_mission .$nom_astronaute;
    $req5 = $db->prepare("INSERT INTO astronaute values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $req5->execute([$id_astronaute, $nom_astronaute, $etat_sante, $_taille, $_poids, $annee_serv, $sexe, $id_tache, $id_mission, $id_vaisseau]);

}

?>