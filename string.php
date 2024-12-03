<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<ul>";
        for ($i=1; $i < 101; $i++) { 
            $tmp = (string)$i;
            if ($i < 10) continue; //Feltétel teljesülése esetén az $i a következő értékre ugrik
            if ($tmp[0] == $tmp[1]){
                echo "<li>$tmp</li>";
            }
        }
        echo "</ul>";
        $str = "Abba";
        $str = strtolower($str); //kisbetűssé alakít
        $rev = "";  //üres sztring
        for ($i= strlen($str)-1; $i >= 0 ; $i--) {  //Karakterenként visszafelé járom be az $str-t
            $rev .= $str[$i];   //összefűzés
        }
        if ($rev == $str){
            echo "<p>$str: palindrom</p>";
        }
        else{
            echo "<p>$str: nem palindrom</p>";
        }
        $str = "ab ba";
        $tmp = str_split($str); //Karakterenként bontja fel a sztringet
        var_dump($tmp); //Ell. milyen típusú, és mit tartalmaz?
        $tmp = explode(" ",$str);
        echo "<br>";
        var_dump($tmp);
        $tmp = implode("", $tmp);   //Tömb elemeit összefűzi üres karakterekkel
        echo "<br>";
        var_dump($tmp);
        $tmp = str_replace(" ","",$str);    //A szóközök cseréje üres sztringre az $str változóban.
        echo "<br>";
        var_dump($tmp);
        echo "<br>". $str[-1];  //utolsó karater
    
    function isPalindrome($string) {
        // Távolítsuk el a szóközöket, írásjeleket, és alakítsuk kisbetűssé a szöveget
        $cleanedString = mb_strtolower(preg_replace("/[^A-Za-z0-9]/u", "", $string), 'UTF-8');
    
        // Ellenőrizzük, hogy a szöveg ugyanaz-e visszafelé olvasva
        $reversedString = mb_strrev($cleanedString);
    
        // Palindrom ellenőrzése
        return $cleanedString === $reversedString;
    }
    
    // mb_strrev függvény a multibyte stringek kezeléséhez
    function mb_strrev($string) {
        $chars = mb_str_split($string);
        return implode('', array_reverse($chars));
    }
    
    $word = "görög";
    
    if (isPalindrome($word)) {
        echo "'$word' egy palindrom.";
    } else {
        echo "'$word' nem palindrom.";
    }
    
    ?>
    

</body>    
</html>