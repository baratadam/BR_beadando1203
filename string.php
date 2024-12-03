<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
   /* $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati aliquam neque labore quisquam placeat nihil quia eligendi, et maiores fuga id? Dolorem saepe odit nemo consectetur magni expedita, nam consequatur?";
    $hossz = strlen($string);
    //hossz
    echo "<p> A szöveg hossza: $hossz karakter </p>";
    echo "<p>";
    for($i = 0; $i < $hossz; $i++){ 
        echo $string[$i] . ",";
    }
    echo "</p>";
    echo "<p>";
    $tmp = str_split($string);
    foreach($tmp as $char){
        echo $char . ",";
    }
    echo "</p>";
    echo "<p>";
    $count = 0;
    for($i = 0; $i < $hossz; $i++){
        if($string[$i] == " "){
            $count++;
        }
    }
    echo "A szövegben " . $count + 1 . " szó van";

    echo "<p>"  ;
    $countsentences = 0;
    for($i = 0; $i < $hossz; $i++){
        if($string[$i] == "."  $string[$i] == "?"  $string[$i] == "!"){
            $countsentences++;
        }
    }
    echo "A szövegben " . $countsentences . " mondat van";
    echo "</p>";

    function is_palindrome($string){
        $hossz = strlen($string);
        for($i = 0; $i < $hossz; $i++){
            if($string[$i] != $string[$hossz - $i - 1]){
                return "hamis";
            }
        }
        return "igaz";
    }
    echo is_palindrome("abba");
    */
    $str = "abba";
    $tmp = "";
    for ($i=mb_strlen($str)-1; $i >= 0; $i--){
        $tmp .= $str[$i];
    }
    if ($tmp == $str){
        echo "<p>Palindrom</p>";
    }
    else{
        echo "<p> Nem palindrom</p>";
    }
    $str = "ab ba";
    $tmp = str_replace("","",$str);
    var_dump($tmp);
    echo "<br>";
    $tmp = explode(" ",$str);
    var_dump($tmp);
    echo "<br>";
    $tmp = implode("",$tmp);
    var_dump($tmp);
    echo "<br>";
    $str = "görög";
    echo mb_strlen($str). "<br>";
    $str = mb_strtolower($str);
    echo $str;
    for ($i=mb_strlen($str)-1; $i >= 0; $i--){
        $tmp .= $str[$i];
    }
    echo $tmp."<br>";
    
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