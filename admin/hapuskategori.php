<?php
	session_start();
	include '../dbconnect.php';

    if (!isset($_SESSION["log"]) || $_SESSION['role']!='Admin') {
        echo "<script>alert('session berakhir! silahkan login kembali'); window.location.href='../login.php'</script>";
        exit;
    }
if(isset($_GET['id_kategori'])){
    $query="DELETE FROM `kategori` WHERE `kategori`.`idkategori` =  ".$_GET['id_kategori']."";

    $hasil =mysqli_query($conn,$query);
?>
<script>
    alert("data berhasil dihapus");
    window.location='kategori.php'
</script>

<?php
}
else{
?>
<script>
    alert("data gagal dihapus, Kategori yang dapat dihapus hanya yang berjumlah 0 produk");
    window.location='kategori.php'
</script>
<?php
}
?>