<?php 
$coon=mysqli_connect("localhost","root","","penjadwalan_labuptkomputer");
function query($database){
    global $coon;
    $rows=[];
    $result=mysqli_query($coon,$database);
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function tambah($data){
    $prodi=$data["PRODI"];
    $hari=$data["HARI"];
    $waktu=$data["WAKTU"];
    $lab=$data["LAB-KE"];
   
    
    global $coon;
   
    
    $result=mysqli_query($coon,"INSERT INTO lab VALUES
    ('','$prodi','$hari','$waktu','$lab')");
    return $result;
}
function hapus($d){
    global $coon;

    $result=mysqli_query($coon,"DELETE FROM lab WHERE ID = $d");
    return $result;
}

function ubah($data){
   
    $prodi=htmlspecialchars($data["PRODI"]);
    $hari=htmlspecialchars($data["HARI"]);
    $waktu=htmlspecialchars($data["WAKTU"]);
    $lab=htmlspecialchars($data["LAB-KE"]);
    $id=$data["ID"];
    global $coon;
    $result=mysqli_query($coon," UPDATE lab SET
    PRODI = '$prodi',
    HARI = '$hari',
    WAKTU = '$waktu',
    LAB-KE = '$lab',
    WHERE ID = $id
    ");
    return $result;
}

function cari($keyword){
    $quer="SELECT * FROM lab 
    WHERE
    PRODI LIKE '%$keyword%'
    ";
 return query($quer);
}
?>

