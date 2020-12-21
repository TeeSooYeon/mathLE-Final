<html>
<title>Arithmetic Sequence Generator</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
<h1>Arithmetic Sequence Generator</h1>
<div class="audiobox" style="position:absolute;top:15%;left:20%;height:200px;">
                <div class="wave one"></div>
                <div class="wave two"></div>
                <div class="wave three"></div>
        <form method="POST">
            First Term: <input class="txtb" type="number" id="a" name="a" placeholder="a₁"><br/><br/>
            Common Difference: <input class="txtb" type="number" id="d" name="d" placeholder="d"><br/><br/>
            Integer N: <input class="txtb" type="number" id="n" name="n" placeholder="n"><br/><br/><br/>
            <input class="btn" style="cursor:pointer;;position:relative;left:35%" type="submit" id="submit" name="submit" value="Generate">
        </form>
</div>
<div class="audiobox" style="position:absolute;top:45%;left:20%;height:200px;">
    <div class="wave one" style="background-color: #e03131"></div>
    <div class="wave two" style="background-color: #e03131"></div>
    <div class="wave three" style="background-color: #e03131"></div>
    <h2>Formula</h2><br/>
    <h2 style="letter-spacing: normal;text-transform:lowercase;color:white">aₙ = a₁ + (n-1) d</h2>
</div>
<div class="audiobox" style="position:absolute;top:15%;left:40%;height:auto">
                <div class="wave one" style="background-color: #74b816"></div>
                <div class="wave two" style="background-color: #74b816"></div>
                <div class="wave three" style="background-color: #74b816"></div>
            a₁ = <?php echo $_POST['a'] ?><br/>
            d = <?php echo $_POST['d'] ?><br/>
            n = <?php echo $_POST['n'] ?><br/><br/>
            The Sequence :<br/><br/>
            <?php 
        if($_POST){
//by hans toquero 2020

            function printAP($a,$d,$n){
                $init = $a;
                //loop to create the array
                for($i = 1; $i <= $n; $i++){
                    echo($init." , ");
                    $init += $d;
                }
                
            }
            //variables
            $a = $_POST['a'];
            $d = $_POST['d'];
            $n = $_POST['n'];
            //print the array
            printAP($a,$d,$n);
        }
            ?>
        </div>
        <footer>by: Hans Toquero, Andrie Lods Tan, Carl Aguilar, Sanny Jover</footer>
</html>