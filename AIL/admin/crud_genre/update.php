<?php
    include("../../koneksi.php");

    if(isset($_GET['updateid'])){
        $idgenre=$_GET['updateid'];
    
        $query = "SELECT * FROM genre";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['edit'])){
        $idgenre= $_POST['idgenre'];
        $genre = $_POST['genre'];

        $query = " UPDATE genre SET idgenre='$idgenre', genre='$genre' WHERE idgenre='$idgenre'";
        $result = mysqli_query($koneksi,$query);
            if($result){
                ?>
                <script>
                    alert('edit sucessfull!');
                    document.location = '../index.php?page=list_genre';
                </script>";
                <?php
            }else{
                echo "failed" .mysqli_error($koneksi); 
            }
        }   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update genre</title>
</head>
<body>
    <h1>Edit genre Data</h1>
    <a href="../index.php?page=list_user"><h3>Back</h3></a>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>id genre<input type="text" name="idgenre" value="<?php if(isset($_GET['updateid'])){echo $data['idgenre'];} ?>"></td>
            </tr>
            <tr>
                <td>genre<input type="text" name="genre" value="<?php if(isset($_GET['updateid'])){echo $data['genre'];} ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="edit" value="edit"></td>
            </tr>
        </table>
    </form>
</body>
</html>