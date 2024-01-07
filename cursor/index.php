<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cursor</title>
    <link rel="stylesheet" href="cursorStyle.css">
    <script src="script.js" language="javascript" type="text/javascript"></script>
</head>
<body>
    <?php
        echo "<textarea name='textArea' id='info' class='info'>Hola</textarea>\n";
        echo "<br/>";
        for ($i=0; $i <= 8; $i++) { 
            for ($j=0; $j <= 8; $j++) { 
                $id="$i$j";
                if ($i%2==0) {
                    if ($j%2==0) {
                        echo "<button id='$id' class='btnPar' onmouseover='printInfo(this)'>$id</button>\n";
                    }else {
                        echo "<button id='$id' class='btnImpar' onmouseover='printInfo(this)'>$id</button>\n";
                    }
                }else {
                    if ($j%2!=0) {
                        echo "<button id='$id' class='btnPar' onmouseover='printInfo(this)'>$id</button>\n";
                    }else {
                        echo "<button id='$id' class='btnImpar' onmouseover='printInfo(this)'>$id</button>\n";
                    }
                }
                
            }
            echo "<br/>";
        }
    ?>
    
</body>
</html>
