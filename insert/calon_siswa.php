<?php
// Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY id DESC");
?>

<html>

<head>    
    <title>IDENTIFIKASI CALON SISWA</title>
   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>

<body>
    <style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
  overflow: scroll;
}

th, td {
  padding: 15px;
}
</style>

<h3>Lengkapi data siswa</h3>
<hr>
<!-- <a class="btn btn-primary" href="insert/add_cs.php">Tambah</a><br/><br/> -->

    <table class="tableee" border=1>
    <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat tanggal lahir</th>
                <th>Agama</th>
                <th>Suku</th>
                <th>Bahasa sehari hari</th>
                <th>ALAMAT DESA/KEL</th>
                <th>ALAMAT KECAMATAN </th>
                <th>ALAMAT KABUPATEN</th>
                <th>sampai kelas</th>
                <th>Pendidikan Terakhir</th>
                <th>Alasan Tidak lanjut sekolah</th>
                <th>Kebiasaan merokok</th>
                <th>Mengkonsumsi Narkoba</th>
                <th>Pernah Bekerja</th>
                <th>pernah bekerja di</th>
                <th>gajih/perbulan</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Action</th>
     </tr>
    <?php  
    $no="1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jk']."</td>";
        echo "<td>".$user_data['ttl']."</td>";   
        echo "<td>".$user_data['agama']."</td>";   
        echo "<td>".$user_data['suku']."</td>";   
        echo "<td>".$user_data['bahasa']."</td>";   
        echo "<td>".$user_data['ald']."</td>";   
        echo "<td>".$user_data['alk']."</td>";   
        echo "<td>".$user_data['alko']."</td>";   
        echo "<td>".$user_data['ltlsk']."</td>";   
        echo "<td>".$user_data['pt']."</td>";   
        echo "<td>".$user_data['atls']."</td>";   
        echo "<td>".$user_data['km']."</td>";     
        echo "<td>".$user_data['mn']."</td>";     
        echo "<td>".$user_data['pb']."</td>";     
        echo "<td>".$user_data['bpbd']."</td>";     
        echo "<td>".$user_data['gp']."</td>";    
        echo "<td>".$user_data['keterangan']."</td>";    
        echo "<td>".$user_data['tanggal']."</td>";    
        echo "<td><a href='/program_april/insert/edit_cs.php?id=$user_data[id]'>Edit</a> | <a href='/program_april/insert/delete_cs.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>

