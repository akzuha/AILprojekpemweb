<?php
    include("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>halaman-index</title>
</head>
<body>
    <h1 align="center">AIL.ID </h1>
    <h2 align="center">DATA USER</H2>
        <h2>
            <form action="index.php" method="GET">
                <table align="center" border="">
                    <tr>
                        <th> id </th>
                        <th> username </th>
                        <th> password </th>
                        <th> gender </th>
                        <th> tanggal lahir </th>
                        <th> alamat </th>
                    </tr>
                <?php 
                    $query = "SELECT * FROM `user`";
                    $result = mysqli_query($koneksi,$query);

                    while($data_user = mysqli_fetch_assoc($result)){
                        $idakun = $data_user['idakun'];
                        $username = $data_user['username'];
                        $password = $data_user['password'];
                        $gender = $data_user['gender'];
                        $tanggal_lahir = $data_user['tanggal_lahir'];
                        $alamat = $data_user['alamat'];
                        echo '<tr>
                                <td>' .$idakun. '</td>
                                <td>' .$username. '</td>
                                <td>' .$password. '</td>
                                <td>' .$gender. '</td>
                                <td>' .$tanggal_lahir. '</td>
                                <td>' .$alamat. '</td>
                                <td><a href="update.php?updateid='.$idakun.'"> UBAHHH </a> | 
                                    <a href="delete.php?deleteid='.$idakun.'"> HAPUSSS </a>
                                </td>
                              </tr>';
                    }
                ?>  
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="register.php"> Menambah data </a></td>
                    </tr>
                </table>
            </form>
        </h2>
</body>
</html>