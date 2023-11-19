<?php
    include("koneksi.php");
    if(isset($_POST['submit_user'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query_user = "SELECT * FROM user WHERE 1";
        $result_user = mysqli_query($koneksi, $query_user);

        $result_user && mysqli_num_rows($result_user) > 0;
            $user = mysqli_fetch_assoc($result_user);
            $storedpassword = $user['password'];
            
            if(password_verify($password, $storedpassword)){
                session_start();
                $_SESSION['idakun'] = $user['idakun'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['password'] = $user['password'];
                $_SESSION['gender'] = $user['gender'];
                $_SESSION['tanggal_lahir'] = $user['tanggal_lahir'];
                $_SESSION['alamat'] = $user['alamat'];
                header("Location: user_dashboard.php");
                exit;
            }else {
                echo "Kata sandi salah";
            }
        } elseif(isset($_POST['submit_supplier'])){    
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query_supplier = "SELECT * FROM supplier WHERE 1";
        $result_supplier = mysqli_query($koneksi, $query_supplier);

        $result_supplier && mysqli_num_rows($result_supplier) > 0;
            $supplier = mysqli_fetch_assoc($result_supplier);
            $storedpassword = $supplier['password'];
            
            if(password_verify($password, $storedpassword)){
                session_start(); 
                $_SESSION['idsupplier'] = $supplier['idsupplier'];
                $_SESSION['username'] = $supplier['username'];
                $_SESSION['password'] = $user['password'];
                header("Location: supplier_dashboard.php");
                exit;
            } else {
                echo "Kata sandi salah";
            }
        } else {
            ?><script>alert('Username Tidak Ditemukan! Coba isi ulang!')</script><?php
        }
    
?>