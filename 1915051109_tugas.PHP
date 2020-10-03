<!DOCTYPE html>
<html>
    <head>
<title>Baris Aritmatika / Rama Mahardika(1915051109)</title></head>
<body>
<h3>Aplikasi Baris Aritmatika</h3>
<form action="" method="post">
Masukan Barisan Aritmatika: <br><input type="text" name="bar"><br>
Suku Pertama:<br><input type="text" name="a"><br>
Beda: <br><input type="text" name="b"><br>
Suku Ke- : <input type="text" name="un"><br>
<input type="submit" name="submit" value="Hasil">
</body>
</form>
</html>


<?php 
if (isset($_POST['submit'])){
    $baris = $_POST['bar'];
    $suku1 = $_POST['a'];
    $suku2 = $_POST['b'];
    $suku_n = $_POST['un'];  

   $hasil1 = $suku_n - 1;
   $hasil2 = $hasil1 * $suku2;
   $hasil = $suku1 + $hasil2;
   echo '<br>';
   echo "Suku Ke- ".$_POST['un'] ;
   echo " dari Baris Aritmatika  " .$_POST["bar"] ;
   echo "  adalah  ";
   echo $hasil;
    
}
?>
