<?php

class Ville {

    public function recupereVille(int $ville_id) {
        $dsn = "mysql:host=localhost;dbname=projet_villes_site;charset=utf8";
        $pdo = new PDO($dsn, "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
        $sql = "SELECT ville_id, ville_nom FROM villes WHERE ville_id = $ville_id";
        $statement = $pdo->query($sql);
        
        $ville = $statement->fetchAll();

        return $ville;
    }

    public function recupereVilles() {
        $dsn = "mysql:host=localhost;dbname=projet_villes_site;charset=utf8";
        $pdo = new PDO($dsn, "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
        $sql = "SELECT ville_id, ville_nom FROM villes";
        $statement = $pdo->query($sql);

        $villes = $statement->fetchAll();

        return $villes;
    }

}

?>