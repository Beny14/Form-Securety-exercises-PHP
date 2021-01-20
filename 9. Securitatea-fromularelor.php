<?php
// .............. 1 .............
/*
    Următorul exemplu va curăța şirul de tag-uri periculoase < >:
*/

    // function tag($p){
    //     $p = str_replace("<", "<", $p);
    //     $p = str_replace(">", ">", $p);
    //     return $p;
    // }
    // $text = tag($_POST['text']);

// sau cu aceasta functie

    // echo strip_tags("<abc>text");

//Funcția htmlentities() convertește de asemenea marcajele HTML în coduri HTML:

    // echo htmlentities("<abc>text");
    // echo htmlspecialchars("<abc>text");
?>

<!-- .............. 2 ............. -->
<!-- Dacă vom seta următoarea formă pe pagina noastră, datele sale vor fi expediate prin motorul de căutare Google -->

<!-- 
    <form action="http://www.google.com/search" name=f>
        <input autocomplete="off" name=q title="Google Search" value="">
        <input name=btnG type=submit value="Google Search">
    </form> 
-->

<!-- .............. 3 ............. -->
<!-- 
    Utilizatorul poate pur și simplu să facă o formă identică pe serverul
    său, să schimbe traseul atributului action în absolut 
    (http://www.serverulsau.com/serverulmeu.php) 
-->

<!-- <form action="serverulmeu.php" name="formaMea">
    <input name="numedeutilizator" type="text">
    <input name="parola" type="text">
</form> -->

<?php
    // $host = "www.siteulSau.com";
    // $port = 80;
    // $parametrii = "numeDeUtilizator=administrator&parola=$generate";
    // $response = "";

    // $fp = fsockopen("www.siteulSau.com", 80);
    // fputs($fp, "POST /search HTTP/1.1\r\n");
    // fputs($fp, "Host: {$host}\r\n");
    // fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
    // fputs($fp, "Content-length: " . strlen($parametri) . "\r\n");
    // fputs($fp, "Connection: close\r\n\r\n");
    // fputs($fp, $parametrii);

    // while(!feof($fp))
    //     $response .= fgets($fp);
    // fclose($fp);
    // prelucrare($response);

// .............. 4 .............
// Verifica întodeauna Referer-ul atunci când o formă este procesată

    // if($_SERVER['HTTP_REFERER'] != "http://www.siteulsau.com") die("Referer fals");

// .............. 5 .............
// Rederer-ul poate fi pacalit 

    // fputs($fp, "Referer: http://www.siteulsau.com");
?>

<!-- .............. 6 ............. -->
<!-- Un alt exemplu -->
    <!-- <select name="sex">
        <option>m</option>
        <option>f</option>
    </select> -->

<?php
// Procesarea lor în PHP va arăta probabil în felul următor:
    // intraInBazaDeDate($_POST['sex']);
?>

<!-- Utilizatorul poate sa-si faca propria sa instanta: -->
    <!-- <input name="sex" type="text" /> -->

<!-- .............. 7 ............. -->
<?php
    // Un mod mai bun de a securiza datele, ar fi:
    // $sexe = array("m","f");

    // echo "<select name='sex'>";
    //     for($i = 0; $i < count($sexe); $i++){
    //         echo "<option> $sexe[$i] </option>";
    //     }
    // echo "</select>";
    //     if(in_array($_POST['sex'], $sexe)){
    //         intraInBazaDeDate($_POST['pol']);
    //     }
?>





