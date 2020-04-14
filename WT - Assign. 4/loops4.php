<!Doctype html>
<html>
    <head>
        <title>Chess Board</title>
    </head>
    <body>
    <center>
    <u><h1>Chess Board</h1></u>
        

        <?php

        echo "<table width=290px cellpadding=0px cellspacing=0px border=2px bordercolor=#000000>";

        for ($row=1 ; $row<=8; $row++)
        {
            echo"<tr>";
            for($column = 1 ; $column <= 8 ; $column++)
            {
                $tot = $column + $row;

                if($tot % 2 == 0)
                {
                    echo"<td height=30px width=30px bgcolor=#ffffff></td>";
                }
                else
                {
                    echo"<td height=30px width=30px bgcolor=#000000></td>";
                }
            }
        }
        ?>
    </body>
</html>