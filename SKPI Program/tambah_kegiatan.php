<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("koneksi.php");
 
if(isset($_POST['submit'])) {    
    $name = $_POST['name'];
    $tanggal = $_POST['tanggal'];
    $sebagai = $_POST['sebagai'];
	$penyelenggara = $_POST['penyelenggara'];
	$sertifikat = $_FILES['sertifikat']['name'];
	$lokasi = $_FILES['sertifikat']['tmp_name'];
    $loginId = $_SESSION['id'];
	
	
	// Tentukan folder untuk menyimpan file
$folder = "images/$sertifikat";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi,"$folder")){
    
    // checking empty fields
    if(empty($name) || empty($tanggal) || empty($sebagai) || empty($penyelenggara)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($tanggal)) {
            echo "<font color='red'>Tanggal field is empty.</font><br/>";
        }
        
        if(empty($sebagai)) {
            echo "<font color='red'>Sebagai field is empty.</font><br/>";
        }
		
		if(empty($penyelenggara)) {
            echo "<font color='red'>Penyelenggara field is empty.</font><br/>";
        }
		
		
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} 
		else { 
	

        //insert data to database    
        $result = mysqli_query($mysqli, "INSERT INTO products(name, tanggal, sebagai, penyelenggara, sertifikat, login_id) 
		VALUES('$name','$tanggal','$sebagai', '$penyelenggara', '$sertifikat', '$loginId')");
		}
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='kegiatan.php'>Lihat Data</a>";
    }
}
?>

