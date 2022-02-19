<!DOCTYPE html>
<html>
    <body>
        <h1> First PHP Commit</h1>

        <!-- php script -->
        <?php
        $color = "red";
        $Color = "green";
        $b = 5;
        $c = 5;
        $Z;
        $a = 69;
        $x = 1;
        $y = 1;
        $z = $x + $y;
        echo "hasil = ".$z."<br>";
        echo "HALO GAN!!!".$color."<br>";
        ECHO "Hello World2!".$Color."<br>";
        
        function fungsisatu($a=69) {
            // kie variable global nang jero function. global $Z, $b, $c;
            // $Z = $b + $c; 
            // nek nang ngisor kie nganggo array
            $GLOBALS['Z'] = $GLOBALS['b'] + $GLOBALS['c'];
            echo "<p>This variable X inside fungsisatu function = $a</p>";
        }
        fungsisatu();
        echo "<p>This is variable x outside fungsisatu function = $a</P>";
        echo "<p>The variable and array Z is = $Z</p>";
        ?>
        
            

        <form action ="login.php" method="get">
        <button type="submit">Launch Now!</button>
        <!-- <input type="submit" value="Open Form"> -->
        </form>


    </body>
</html>