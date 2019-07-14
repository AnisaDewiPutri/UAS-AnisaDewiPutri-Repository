<html>
<head>
    <title>Tambah Data Produk</title>
</head>
<body>
    <form action="action_input.php" method="POST" enctype="multipart/form-data">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="40">&nbsp;</td>
            <td>&nbsp;</td>
            <td><font size="4" color="blue"><b>Tambah Data Produk</b></font></td>
        </tr>
        <tr>
            <td height="36"></td>
            <td><a href="view_data.php" target="_blank" style="text-decoration:none">View Data</a></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td height="40">&nbsp;</td>
            <td>Nomor</td>
            <td><input type="text" name="id_produk" size="12"></td>
        </tr>
        <tr>
            <td height="40">&nbsp;</td>
            <td>Nama</td>
            <td><input type="text" name="nama_produk" size="30"></td>
        </tr>
        <tr>
            <td height="40">&nbsp;</td>
            <td>Harga</td>
            <td><input type="text" name="harga_produk" size="30"></td>
        </tr>
        <tr>
            <td height="40">&nbsp;</td>
            <td>Berat</td>
            <td><input type="text" name="berat" size="60"></td>
        </tr>
        <tr>
            <td height="36">&nbsp;</td>
            <td>Foto</td>
            <td><input type="text" name="foto_produk" size="12"></td>
        </tr>
        <tr>
            <td height="60">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
            <input type="reset" name="reset" value="Reset"></td>
        </tr>
        </table>
    </form>
    
</body>
</html>