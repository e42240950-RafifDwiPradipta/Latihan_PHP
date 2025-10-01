<?php
$akar_kuadrat = sqrt(16);
echo "Akar kuadrat dari 16 adalah $akar_kuadrat";
?>

<?php
echo "14 pangkat 2 adalah: ".pow(14,2);
?>

<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
$a= $angka1;
$b= $angka2;
$hasil= $a*$b;
return $hasil;
}
//pemanggilan fungsi
$hasil=perkalian(6,5);
echo "Perkalian 6 x 5 adalah $hasil";
echo "<br />";
echo "Perkalian 7 x 2 adalah ".perkalian(7,2);
?>

