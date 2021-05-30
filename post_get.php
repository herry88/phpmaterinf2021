<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post dan get</title>
</head>
<body>
    <form action="member.php" method="GET">
        <table>
            <tr>
                <td>Nama calon member:</td>
                <td><input type="text" name="name"  placeholder="nama calon member" autocomplete="off"  required></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><input type="text" name="alamat"  placeholder="alamat" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" checked value="laki-laki" name="jk">Laki-laki
                    <input type="radio" value="perempuan" name="jk">Perempuan
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Daftar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>