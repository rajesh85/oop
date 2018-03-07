<?php
    $host = 'localhost';
    $db = 'learnlaravel';
    $port = '3306';
    $charset = 'utf8mb4';
    $username = 'root';
    $password = '';
    $opt = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $dsn = "mysql:host=".$host.";dbname=".$db.";port=".$port.";charset=".$charset;
    try {
        $con = new PDO($dsn, $username, $password, $opt);
    }catch (PDOException $e){
        die('ERROR: '.$e->getMessage());
    }

    $title = 'This is a new title';
    $description = 'This is new description';

    $sql = "INSERT INTO products(title,description)  VALUES(:title, :description)";
    $stmt = $con->prepare($sql);
    $ret = $stmt->execute([':title'=>$title, ':description'=>$description]);
    $id = $con->lastInsertId();

    $sql = "SELECT * FROM products";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach($products as $p){
        echo $p->title.'<br>';
    }

    $nid = (($id > 1) > 1) ? $id - 1 : $id;
    $ntitle = 'This is modified title';
    $ndescription = 'This is modified description';
    $sql = "UPDATE products SET
            title=:ntitle, 
            description=:ndescription
            WHERE id=:id";
    $stmt = $con->prepare($sql);
    $stmt->execute([':ntitle'=>$ntitle, ':ndescription'=>$description, ':nid'=>$nid]);







