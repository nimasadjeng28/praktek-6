<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Form Biodata</h1>
        <form method="POST" action="biodata.php">
            <table width="500" align="left" cellpading="5" cellspacing="5">
                <tr>
                    <td width="300">Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td width="300">Umur</td>
                    <td><input type="number" name="umur"></td>
                </tr>
                <tr>
                    <td width="300">Jenis Kelamin</td>
                    <td><input type="text" name="gender"></td>
                </tr>
                <tr>
                    <td width="300">Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td width="300">Pendidikan</td>
                    <td><input type="text" name="pendidikan"></td>
                </tr>
                <tr>
                    <td width="300">Pekerjaan</td>
                    <td><input type="text" name="pekerjaan"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnSubmit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>