<?php

// Tentukan folder file yang boleh di download
$folder = "images/";
// Lalu cek menggunakan fungsi file_exist
if (!file_exists($folder.$_GET['sertifikat'])) {
  	echo "<h1>Access forbidden!</h1>
      <p> Anda tidak diperbolehkan mendownload file ini.</p>";
  	exit;
}

// Apabila mendownload file di folder files
else {
  header("Content-Type: octet/stream");
  header("Content-Disposition: attachment; 
  filename=\"".$_GET['sertifikat']."\"");
  $fp = fopen($folder.$_GET['sertifikat'], "r");
  $data = fread($fp, filesize($folder.$_GET['sertifikat']));
  fclose($fp);
  print $data;
}
?>