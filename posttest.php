<title>Posttest</title>
<?php
echo "<center><img src=logo.jpg width = 100px height = 100px><br>FAKULTAS ILMU KOMPUTER<br>";
echo "UNIVERSITAS KUNINGAN </br>";
echo "<hr size=5></hr>";
print "<b>Operasi Perhitungan</b></center><br>";

$p = 5;
$l = 8;
$t = 7;
$luas_permukaan_balok = 2*(($p*$l)+($p*$t)+($l*$t));
$volume_balok = $p*$l*$t;
$keliling = 4*($p*$l*$t);


echo "<table border=1 align=center>
        <tr align = center>
            <td>NO</td>
            <td>Bangun Ruang</td>
            <td>Rumus</td>
            <td>Operasi</td>
            <td>Hasil Operasi</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Luas Permukaan Balok</td>
            <td>2*((p*l)+(p*t)+(l*t))</td>
            <td>2*((5*7)+(5*8)+(7*8))</td>
            <td>".$luas_permukaan_balok."</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Volume Balok</td>
            <td>p*l*t</td>
            <td>5*7*8</td>
            <td>".$volume_balok."</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Keliling</td>
            <td>4*(p*l*t)</td>
            <td>4*(5*7*8)</td>
            <td>".$keliling."</td>
        </tr>
    </table>"
    ;