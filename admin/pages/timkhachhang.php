                                <?php
                                    include"include/connetc.php";
                                    if (isset($_REQUEST['submit'])) 
                                    {
                                        $Search =$_GET['Search'];
                                        if (empty($Search)) {
                                            echo "Yeu cau nhap du lieu vao o trong";
                                        } 
                                        else
                                        {
                                            $sql="SELECT * from dskhachhang where tenkh LIkE '%".$Search."%'";
                                            print_r($sql);
                                            $result=mysqli_query($connection,$sql);
                                            $num = mysqli_num_rows($result);
                                            if ($num > 0 && $Search != "") 
                                            {
                                                echo "$num ket qua tra ve voi tu khoa <b>$Search</b>";
                                                echo '<table border="1" cellspacing="0" cellpadding="10">';
                                                while ($row=mysqli_fetch_array($result)) {
				                                ?>
				                                <tr>
				                                    <td><?php echo $row['tenkh']?></td>
				                                    <td><?php echo $row['diachi']?></td>
				                                    <td><?php echo $row['sdt']?></td>
				                                    <td><?php echo $row['mail']?></td>
				                                     <td><?php echo $row['tendn']?></td>
				                                     <td><?php echo $row['matkhau']?></td>
				                                </tr>
				                                <?php 
				                            	}
                                            } 
                                            else {
                                                echo "Khong tim thay ket qua!";
                                            }
                                        }
                                    }
                                ?>