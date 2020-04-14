    <?php
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $ch = $_POST['ch'];

        switch($ch)
        {
            case 1:
                $ans = $num1 + $num2;
                echo "Result :".$ans;
                break;
            
            case 2:
                $ans = $num1 - $num2;
                echo "Result :".$ans;
                break;
                
            case 3:
                $ans = $num1 * $num2;
                echo "Result :".$ans;
                break;

            case 4:
                $ans = $num1 / $num2;
                echo "Result :".$ans;
                break;

            default:
                echo "Invalid Choice";
        }
    
    ?>
