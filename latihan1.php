<?php
// ini adalah contoh komentar di PHP
echo "Belajar PHP itu sangat mudah";

// cara membuat variabel
$full_name = "Nuris Akbar";
$age       = 26;
echo "<br>";
// cara mencetak string dari variabel
echo "Nama Saya adalah : $full_name Dan umur saya adalah : ".$age;
echo "<br>";
echo 'Nama Saya adalah : '.$full_name.' Dan umur saya adalah : '.$age;


$angka1= 10;
$angka2 =13;
//echo $angka1/$angka2;

echo "<Br>";
$nama ="nuris";
$nama .=" Akbar";

echo $nama;
echo "<br>";

$nilaiMahasiswa =60; 
$grade="";
if($nilaiMahasiswa>90 and $nilaiMahasiswa<100){
    $grade="A";
}elseif($nilaiMahasiswa>80){
    $grade="B";
}else{
    $grade = "D";
}
echo $grade;




$channelTV=1;

switch ($channelTV) {
    case 1:
        echo "Indonesiar";
        break;
    case 2:
        echo "MNC TV";
        break;
    default:
        echo "unknow channel";
        break;
}



echo "<hr>";
// Cara Membuat Array Versi Pertama
$cats = array('persia','anngora','spinyx');
print_r($cats);

// Cara Membuat Array Versi Kedua
echo "<hr>";
$fruits = array();
$fruits [2] ="Mangga";
$fruits [4] ="Apel";
$fruits [1] ="Pepaya";
print_r($fruits);

// Cara mengakses Elemen Array
echo $fruits[4];

echo "<hr>";

$students = array(
    array('nim'=>'TI102132','nama'=>'Nuris Akbar'),
    array('nim'=>'TI102133','nama'=>'Hafidz Muzaki'),
    array('nim'=>'TI102134','nama'=>'Wahyu Safrizal'),
);
echo "<pre>";
print_r($students);



echo $students[1]['nama'];

echo "<hr>";
$pendidikan_terakhir = array(
    array('singkatan'=>'sd','level_Sekolah'=>'Sekolah Dasar'),
    array('singkatan'=>'smp','level_Sekolah'=>'Sekolah Menengah Dasar'),
    array('singkatan'=>'sma','level_Sekolah'=>'Sekolah Menengah Pertama'),
    array('singkatan'=>'d4','level_Sekolah'=>'Diploma 4'),
    array('singkatan'=>'S1','level_Sekolah'=>'Strata 1'),
);

print_r($pendidikan_terakhir);
echo "</pre>";

// mengitung jumlah array
echo count($pendidikan_terakhir);

echo "<hr>";
// looping FOR
for($i=1;$i<=10;$i++){
    echo "Angka Ke - ".$i;
    echo "<Br>";
}



foreach ($fruits as $fruit){
    echo $fruit;
    echo "<br>";
}

foreach ($students as $student){
    //print_r($student);
    //echo "<br>";
    echo $student['nama'];
}

echo "<hr>";
// contoh build in function php
//strtoupper('nuris');

// cara membuat function
function sayHello($nama=null){
     return "hallo ".$nama;
}

// cara memanggil function
 sayHello("Nuris Akbar");
 
 
 
 function perhitungan($angka1,$angka2,$operator){
     if($operator=='-'){
         return $angka1+$angka2;
     }elseif($operator=='-'){
         return $angka1-$angka2;
     }elseif($operator=='*'){
         return $angka1*$angka2;
     }elseif($operator=='/'){
         return $angka1/$angka2;
     }else{
         return null;
     }
 }
 
 echo perhitungan(1, 10,'#');

 
 $string = "Hello Dunia";
 $pecah = explode(' ', $string);
 print_r($pecah);

$arrData = array('Hello','Dunia');
print_r(implode('-', $arrData));
?>
