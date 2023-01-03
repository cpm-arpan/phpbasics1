<html>
    <head><title></title>

</head>
<body>
    <table border="1" align="center">
        <?php
       
        for($x=1;$x<=10;$x++){
            echo "<tr>";
            for($y=1;$y<=10;$y++){
                // echo;
                echo '<td>'
               .  $x * $y.
               ' </td>';
            }
            echo '</tr>';
        }
        ?>
</body>