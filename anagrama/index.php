<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>anagrama</title>
</head>
<body>
    <?php
        echo "<h2>SON ANAGRAMAS</h3>";
        if (isset($_REQUEST['a']) && isset($_REQUEST['b'])) {
            $a = $_REQUEST['a'];
            $b = $_REQUEST['b'];
            echo "<p>La variable a es $a</p>";
            echo "<p>La variable b es $b</p>";
            sonAnagramas($a, $b);
        }else {
            echo "<p>Falt algún parámetro</p>";
        }
        function sonAnagramas($a, $b){
            $alower = strtolower($a);
            $blower = strtolower($b);

            $awbck = str_split($alower);
            $bwbck = str_split($blower);

            sort($awbck);
            sort($bwbck);

            echo implode("", $awbck) . "<br>";
            echo implode("", $bwbck) . "<br>";

            $atrim = trim(implode("", $awbck));
            $btrim = trim(implode("", $bwbck));

            if ($atrim === $btrim) {
                echo "<p>$a y $b <b>Son</b> Anagramas</p>";
            } else {
                echo "<p>$a y $b <b>No son</b> Anagramas</p>";
            }
        }
    ?>
</body>
</html>