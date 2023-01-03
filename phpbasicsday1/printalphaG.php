<html>
    <head><title></title>

</head>
<body>
    <?php
    for ($row=0; $row<7; $row++)
    {
      for ($column=0; $column<=4; $column++)
        {
        if (($column == 0 and $row != 0 and $row != 6 and $row!=7) or (($row == 0 or $row == 6) and $column >= 1 and $column <= 3) or ($row == 3 and $column >= 2) or ($column == 4 and $row != 0 and $row != 2 and $row != 6 and $row!=7))
                echo "*";    
            else  
                echo "&nbsp ";     
        }
        echo '<br>';      
      echo "\n";
    } 
    ?>
</body>