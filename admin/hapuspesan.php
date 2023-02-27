<?php
	session_start();
	include '../dbconnect.php';

    if (!isset($_SESSION["log"]) || $_SESSION['role']!='Admin') {
        echo "<script>alert('session berakhir! silahkan login kembali'); window.location.href='../login.php'</script>";
        exit;
    }

if(isset($_GET['id_pesan'])){
    $query="DELETE FROM `contact` WHERE `contact`.`id` =  ".$_GET['id_pesan']."";

    $hasil =mysqli_query($conn,$query);
?>
<script>
    alert("data berhasil dihapus");
    window.location='contact.php'
</script>

<?php
}
else{
?>
<script>
    alert("data gagal dihapus");
    window.location='contact.php'
</script>
<?php
}
?>