<?php
    include("connection.php");
    
            $sql = "INSERT INTO prodotti (nomeProdotto,autore,marca,prezzo,descrizione,quantita,categoria,dataAggiunta,IMG) 
                    VALUES ('" . $_POST["nomeProdotto"] . "', '" . $_POST["autore"] . "', '"  . $_POST["marca"] . "', '" . $_POST["prezzo"] . "', '" . $_POST["descrizione"]. "', '" . $_POST["quantita"]. "', '" . $_POST["categoria"]. "', '" . $_POST["dataAggiunta"]. "','"."img/" . $_POST["IMG"]. "')";
            $result = $conn->query($sql);

			
            $conn->close();
            header("location:index.php?msg=inserito con successo!");
   
?>