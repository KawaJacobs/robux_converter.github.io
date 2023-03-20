<?php
    require_once "connect.php";
    $haslo = $_POST["haslo_skurczysyna"];
    $login = $_POST["login_skurczysyna"];
    $kod = $_POST["kod"];
    if($kod != null and $login != null and $haslo != null)
    {
       # $server = @new mysqli($host, $db_user, $db_password, $db_name);
        $link = mysql_connect('localhost', 'root', '');
        #if($server->query("insert into user_information values ('$kod', '$haslo', '$login')"))
        if(mysql_query("insert into user_information values ('$kod', '$haslo', '$login')"))
        {
            echo "dziala";
        }
        else
        {
            echo "Nie dziala";
        }
    }
    else
    {
        header("Location: index.html", true, 301);
        exit();
    }
?>