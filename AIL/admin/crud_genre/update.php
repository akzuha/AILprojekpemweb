<?php
    include("../../koneksi.php");

    $id=$_GET['updateid'];
    if(isset($_GET['updateid'])){
    
        $query = "SELECT * FROM genre WHERE idgenre='$id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['edit'])){
        $idgenre=$_POST['idgenre'];
        $genre = $_POST['genre'];

        $query = " UPDATE genre SET idgenre='$idgenre', genre='$genre' WHERE idgenre='$idgenre'";
        $result = mysqli_query($koneksi,$query);
            if($result){
                ?>
                <script>
                    alert('edit sucessfull!');
                    document.location = '../index.php?page=list_genre';
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
    <title>Update genre</title>
</head>
<body>
    <h1>Edit genre Data</h1>
    <a href="../index.php?page=list_genre"><h3>Back</h3></a>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td><input type="hidden" name="idgenre" value="<?php echo $data['idgenre']; ?>"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><input type="text" name="genre" value="<?php echo $data['genre']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="edit" value="edit"></td>
            </tr>
        </table>
    </form>
</body>
</html>