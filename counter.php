<html>
<head>
<title>Contoh Counter</title>
</head>
<body>
<?php
 $nama_file="test1.txt";
 If (file_exists($nama_file))
 {
 $berkas = fopen($nama_file,"r");
 $pencacah = (integer)trim(fgets($berkas, 255));
 $pencacah++;
 Fclose($berkas);
 }
 Else
 $pencacah = 1;
 // simpan pencacah
 $berkas = fopen($nama_file,"r");
 fputs($berkas, $pencacah);
 fclose($berkas);
 // tulis ke halaman web
 Print("Anda pengunjung ke-$pencacah <br>\n"); ?>
</body>
</html>