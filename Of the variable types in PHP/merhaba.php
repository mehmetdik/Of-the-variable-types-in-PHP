<Head>
<Title>PHP'de Degisken Turleri</Title>

</Head>
<Body>
<B>
<h2>
<?php
$sayi= 10;
print("Birinci degiskenin adi: \$sayi<br>");
print("Degeri : ");
print "$sayi<br>";
print("Turu : ");
print gettype( $sayi ) ; //tamsayi/integer
print "<br>";
print "<br>";
$alfanumerik= "Mehmet";
print "ikinci degiskenin adi: \$alfanumerik<br>";
print "Degeri : ";
print "$alfanumerik<br>";
print("Turu : ");
print gettype( $alfanumerik ) ; //alfanümerik/string
print "<br>";
print "<br>";
$ondalik= 7.1247;
print "Ucuncu degiskenin adi: \$ondalik<br>";
print "Degeri : ";
print "$ondalik<br>";
print("Turu : ");
print gettype( $ondalik ) ; //çift,ondalık/double
print "<br>";
print "<br>";
$mantiksal= true;
print "Ucuncu degiskenin adi: \$mantiksal<br>";
print "Degeri : ";
print "$mantiksal<br>";
print("Turu : ");
print gettype( $mantiksal ) ; //mantıksal/boolean
print "<br>";
print "<br>";
?>
</h2>
</B>
</Body>
</Html>

