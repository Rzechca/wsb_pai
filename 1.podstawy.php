<?php
$hr = "<hr>";
$firstName = "Janusz";
$lastName = "Janusz";
echo "imie i nazwisko: $firstName $lastName" ;
echo "imie i nazwisko: $firstName $lastName" ;

//heredoc
echo<<< DATA
<hr>
imie: $firstName<br>
Nazwisko: $lastName
<br>
DATA;

$data = <<< DATA
<hr>
imie: $firstName<br>
Nazwisko: $lastName
<br>
DATA;

echo $data;

$data1 = <<< 'DATA'
<hr>
imie: $firstName<br>
Nazwisko: $lastName
<br>
DATA;

echo $data1;

$bin = 0b1010;
echo $bin;//10

$oct = 0101;
echo $oct;//65

$hex = 0x1A;
echo $hex;//26
echo PHP_VERSION;//7.4.2
echo "<hr>";
$x=1;
$y=1.0;
echo gettype($x);
echo " | ";
echo gettype($y);
echo $hr;
if($x==$y)
echo "Równe";
else
echo "Rozne"
?>