<!DOCTYPE html>
<html>
<body>

<p>1 (≧∇≦)ﾉ ================================================</p>

<?php
// 1 = Comments ========================

// Yang ini single-line comment

# Ini pun juga single-line comment

/* Kalo ini sebutannya 
multi-line comment */
?>

<p>2 (≧∇≦)ﾉ ================================================</p>

<?php
// 2 = PHP Variable ========================
$x = 24;
$y = "Heizou";

echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo "$y is $x years old";
?>

<p>3 (≧∇≦)ﾉ ================================================</p>

<?php
// 3 = PHP Echo ========================
// tampilkan data pake echo
$txt1 = "Selamat Datang";
$txt2 = "di Teater Perjalanan Mentari";

echo "<h2>$txt1</h2>";
echo "<p>Berjumpa lagi $txt2</p>";
?>

<p>4 (≧∇≦)ﾉ ================================================</p>

<?php
// 4 = PHP Data Type ========================
$a = 16102024;
$b = 24.7;
$c = false;
$x = "Disini tanda petiknya dua";
$y = 'Yang ini pake petik satu';

var_dump($a);
echo "<br>"; 
var_dump($b);
echo "<br>"; 
var_dump($c);
echo "<br>"; 
var_dump($x);
echo "<br>"; 
var_dump($y);
?>

<p>5 (≧∇≦)ﾉ ================================================</p>

<?php
// 5 = PHP String ========================
// SINGLE QUOTE
$x = "Shikanoin Rei";
echo 'Selamat datang $x';

echo "<br>";

// DOUBLE QUOTE
$x = "Shikanoin Rei";
echo "Selamat datang $x";
?>

<p>6 (≧∇≦)ﾉ ================================================</p>

<?php
// 6 = PHP Number ========================
$a = 25107027;
$b = 2.0070;
$c = "80426";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
?>

<p>7 (≧∇≦)ﾉ ================================================</p>

<pre>
<?php
// 7 = PHP Casting ========================
$a = 2000204;       // Integer
$b = 24.76;    // Float
$c = "jadi apa nanti"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (boolean) $a;
$b = (int) $b;
$c = (string) $c;
$d = (string) $d;
$e = (float) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>
</pre>
<p>Note : Kalo Boolean diubah ke dalam bentuk string, nilainya jadi "1". Kalo NULL djadikan string, hasilnya nanti berupa string kosong "".</p>

<p>8 (≧∇≦)ﾉ ================================================</p>

<?php
// 8 = PHP Math ========================
// Math Functions sqrt
echo(sqrt(144) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(256) . "<br>");
echo(sqrt(9). "<br>");
?>
<p></p>
<?php
// Math Functions round
echo(round(0.897) . "<br>");
echo(round(0.400) . "<br>");
echo(round(0.7027) . "<br>");
echo(round(-20.80) . "<br>");
echo(round(-7.520));
?>

<p>9 (≧∇≦)ﾉ ================================================</p>

<?php
// 9 = PHP Operators (semua aritmethic, x=y dan x+=y, equal, identical) ========================

// ARITHMETIC OPERATORS ========================
// ADDITION 
$x = 800;  
$y = 45;
echo $x + $y;

echo "<br>";

// SUBTRACTION
$x = 72;  
$y = 8;
echo $x - $y;

echo "<br>";

// MULTIPLICATION
$x = 24;  
$y = 68;
echo $x * $y;

echo "<br>";

// DIVISION
$x = 45;  
$y = 5;
echo $x / $y;

echo "<br>";

// MODULUS 
$x = 4000;  
$y = 8;
echo $x % $y;

echo "<br>";

// EXPONENTIATION
$x = 802;  
$y = 6;
echo $x ** $y;

echo "<br>";

// ASSIGNMENT OPERATORS ========================
// setting the values 
$x = 7027;  
echo $x;

echo "<br>";

// ADDITION
$x = 246;  
$x += 40;
echo $x;

echo "<br>";

// COMPARING OPERATORS ========================
// EQUAL
$x = 2024;  
$y = "2024";
var_dump($x == $y); // returns true because values are equal

echo "<br>";

// IDENTICAL
$x = 4500;  
$y = "4240";
var_dump($x === $y); // returns false because types are not equal

echo "<br>";

// IDENTICAL VERSE 2
$x = 5;  
$y = 5.0;

if ($x === $y) {
    echo "true <br>";
} else {
    echo "finish";
}
?>

<p>10 (≧∇≦)ﾉ ================================================</p>

<?php
// 10 = PHP Conditional Statements (if elseif) ========================
// PHP If Statement
$t = "yes";
echo "It's a tiring day...".$t;
echo "<br>";

if ($t = "yes") {
  echo "Oh so you haven't take a break...";
}elseif ($t = "no") {
  echo "I see, so you did take a break";
}
else{
  echo "Have you take a break?";}
?>

<p>11 (≧∇≦)ﾉ ================================================</p>

<?php
// 11 = PHP switch ========================
$genre = "historical";

switch ($genre) {
  case "fantasy":
    echo "I see, so myths, non-logical adventure stories, and magic? no?";
    break;
  case "sci-fi":
    echo "Pretty good, reasonable enough.";
    break;
  case "slice of life":
    echo "A good time to unwind and forget all of your worries.";
    break;
  default:
    echo "So what's your favorite genre of books anyway???";
}
?>

<p>12 (≧∇≦)ﾉ ================================================</p>

<?php
// 12 = PHP Array ========================
$region = array("Mondstadt", "Liyue", "Inazuma", "Sumeru", "Fontaine", "Natlan", "Snezhnaya", "Khaenriah"); 

var_dump($region);
echo "<br>";
var_dump($region[6]);
echo "<br>";
var_dump($region[2]);
echo "<br>";
var_dump($region[0]);
echo "<br>";
?>

<p>13 (≧∇≦)ﾉ ================================================</p>

<?php
// 13 = PHP loop ========================
// For Loop
for ($x = 18; $x <= 35; $x++) {
  echo "List of numbers going on : $x <br>";
}
?>

<p>14 (≧∇≦)ﾉ ================================================</p>

<?php
// 14 = PHP Function ========================
function architecture($fname) {
  echo "$fname Style.<br>";
}

architecture("Ranch");
architecture("Colonial");
architecture("Mediterranian");
architecture("Cottage");
architecture("Victorian");
architecture("Georgian");
?>

<p>15 (≧∇≦)ﾉ ================================================</p>

<?php
// 15 = Tugas Pembuatan Tabel========================
$weapon = array("Sword", "Claymore", "Bow", "Polearm", "Catalyst", "Gun"); 
$statistics = array("Crit DMG", "Crit Rate", "ATK", "Energy Recharge", "HP", "DEF");
$elements = array("Pyro", "Hydro", "Cryo", "Electro", "Anemo", "Geo");

echo "<table border = '1'>";
for ($i = 0; $i <= 5; $i++) {
  echo "<tr>
  <td> $weapon[$i] </td>
  <td> $statistics[$i] </td>
  <td> $elements[$i] </td>
  </tr>";
}
echo "</table>";
?>

</body>
</html>


