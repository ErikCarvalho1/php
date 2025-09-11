<?php 
function getConnection(): PDO{//retorna um objeto PDO 
    static $pdo; 
    if ($pdo === null){ // = (atribuição) / == (comparação) / == (comparação  tipo e valor)
        $pdo = new  PDO("mysql:host=10.91.47.99;dbname=modelophp_dp",
        "root",
        "123",
        [PDO::ATTR_ERRMODE => PDO::ERMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );


    }
    return $pdo;
}



?>