
<?php
if(isset($_POST['submit'])){
    $waktu = $_POST['times'];
if($waktu >= 3600){
    $jam = floor($waktu / 3600);
    $waktu -= ($jam * 3600);
    $hasil .= $jam . " jam ";
}
else if($waktu >= 60){
    $menit = floor($waktu / 60);
    $waktu -= ($menit * 60);
    $hasil .= $menit . " menit ";
}
    $detik = $waktu;
    $hasil .= $detik . " detik "; 

    //
echo $hasil;
}
?>