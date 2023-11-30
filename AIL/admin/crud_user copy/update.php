<?php
    include("../../koneksi.php");
    
    if(isset($_GET['updateid'])){
        $id=$_GET['updateid'];
    
        $query = "SELECT * FROM supplier WHERE idsupplier='$id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['edit'])){
        $idsupplier= $_POST['idsupplier'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = " UPDATE supplier SET idsupplier='$idsupplier', username='$username', password='$password' WHERE idsupplier='$id'";
        $result = mysqli_query($koneksi,$query);
            if($result){
                ?>
                <script>
                    alert('edit sucessfull!');
                    document.location = '../index.php?page=list_supplier';
                </script>
                <?php
            }else{
                echo "failed" .mysqli_error($koneksi); 
            }
        }   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Supplier</title>
</head>
<body>
    <h1>Edit Supplier Data</h1>
    <a href="../index.php?page=list_supplier"><h3>Back</h3></a>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>ID Account</td>
                <td><input type="text" name="idsupplier" value="<?php if(isset($_GET['updateid'])){echo $data['idsupplier'];} ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php if(isset($_GET['updateid'])){echo $data['username'];} ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php if(isset($_GET['updateid'])){echo $data['password'];} ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="edit" value="edit"></td>
            </tr>
        </table>
    </form>
</body>
</html>