<?php include('../../koneksi.php');

$id = $_GET['idfilm'];

$sql = "SELECT * FROM film WHERE idfilm = '$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
?>

<video width="100%" height="100%" controls>
  <source src="../<?php echo $data['video'];?>" type="video/mp4">
  Your browser does not support the video tag.
</video>