<?php
//pembuatan array
$nama = array(
1=>"Andri",
2=>"Joko",
3=>"Sukma",
4=>"Rina",
5=>"Sari");
//cara akses array
echo $nama[1]; //Andri echo "<br />";
echo $nama[2]; //Joko
echo "<br />";
echo $nama[3]; //Sukma
?>

<?php
// pembuatan array
$nama = array("Andri","Joko","Sukma","Rina","Sari");
// pengaksesan array echo $nama[1]; //Joko echo "<br />";
echo $nama[2]; //Sukma echo "<br />";
echo $nama[3]; //Rina
?>

<?php
// pembuatan array
$coba = array (2=>"Andri", "dua"=>"2",
'tiga'=>3,
true=>true,
9=>"sembilan",);
// pengaksesan array echo
$coba[2]; //Andri
echo "<br />";
echo $coba["dua"]; //2
echo "<br />";
echo $coba['tiga']; //3
echo "<br />";
echo $coba[true]; //1 (true di konversi menjadi 1)
echo "<br />";
echo $coba[9]; // sembilan
?>

<?php
// pembuatan array
$nama = ["Andri","Joko","Sukma","Rina","Sari"];
// pengaksesan array
echo $nama[1]; //Joko echo "<br />";
echo $nama[2]; //Sukma echo "<br />";
echo $nama[3]; //Rina
?>