<html>
<head>
    <title>View Data Produk</title>
</head>
<body>
    <br><font size="4"><center><b>DATA PRODUK</b></center><font><br>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFA600" height="40">
            <th width="5%">Id</th>&nbsp;
            <th width="14%">Nama</th>&nbsp;
            <th width="12%">Harga</th>&nbsp;  
            <th width="25%">Berat</th>&nbsp; 
            <th width="30%">Foto</th>&nbsp;        
            <th width="14%">Deskripsi</th>&nbsp;    
        </tr>
    <?php
        include "tambah.php";
    //view data produk di dalam database
        $Lihat="SELECT * FROM produk ORDER BY nama_produk";
               $Tampil = mysqli_query($conn, $query);
        $nomer=0;
        while (    $hasil = mysqli_fetch_array ($Tampil)) {
                $nama_produk    = stripslashes ($hasil['nama_produk']);
                $harga_produk          = stripslashes ($hasil['harga_produk']);
                $berat        = stripslashes ($hasil['berat']);
                $foto         = stripslashes ($hasil['foto']);
                $deskripsi       = stripslashes ($hasil['deskripsi']);
            {
        $nomer++;
    ?>
        <tr bgcolor="#DFE6EF">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr align="center" height="40">
            <td><?=$id?><div align="center"></div></td>
            <td><?=$nama?><div align="center"></div></td>
            <td><?=$harga?><div align="center"></div></td>
            <td><?=$berat?><div align="center"></div></td>
            <td><?=$foto?><div align="center"></div></td>
            <td><?=$deskripsi?><div align="center"></div></td>
        </tr>
        <tr bgcolor="#DFE6EF">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    <?php 
            }
        }
    //Tutup koneksi engine MySQL
        mysqli_close($conn, $query);
    ?>
    </table>
</body>
</html>