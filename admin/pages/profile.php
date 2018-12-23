<?php
    session_start();
    if(isset($_SESSION['mail'])){
?>
<!DOCTYPE html>
<html lang="en">

<?php 
include"include/head.php";
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php 
            include"include/header.php"
         ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="container"><br><br>     
            <h4 align="center">Thông tin cá nhân</h4><br>
                <table width="900px" align="center" >
                                                   <?php
                                                    include"include/connetc.php";
                                                    $mail=$_GET['mail'];
                                                    $sql="SELECT * from dsnhanvien,chucvu where dsnhanvien.macv=chucvu.macv and mail='$mail'";
                                                    $query = mysqli_query($connection, $sql);
                                                    while ($row=mysqli_fetch_assoc($query)){
                                                    ?>
                                                    <tr height="30px" >
                                                        <td >Mã nhân viên : </td>
                                                        <td ><?php echo $row['manv']; ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Tên nhân viên : </td>
                                                        <td ><?php echo $row['tennv']; ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Giới tính : </td>
                                                        <td ><?php 
                                                                if($row['gioitinh']==1) 
                                                                    echo "Nam";
                                                                else
                                                                    echo "Nữ"
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Địa chỉ : </td>
                                                        <td ><?php echo $row['diachi'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Số điện thoại : </td>
                                                        <td ><?php echo $row['sdt'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Mail : </td>
                                                        <td ><?php echo $row['mail'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Chức vụ : </td>
                                                        <td ><?php echo $row['tencv'] ?></td>
                                                    </tr>
                                                    <tr height="30px" >
                                                        <td >Mật khẩu : </td>
                                                        <td ><?php echo $row['pass'] ?></td>
                                                    </tr>
                                                    <?php
                                                         }
                                                 ?>
                                                    </table>
            </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom tdeme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
<?php
}else{
    header('location:login.php');
}
?>