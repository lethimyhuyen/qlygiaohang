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
                                            $sql="SELECT * from dsnhanvien where tennv LIkE '%".$Search."%'";
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
				                                    <td><?php echo $row['manv']?></td>
				                                    <td><?php echo $row['tennv']?></td>
				                                    <td><?php echo $row['gioitinh']?></td>
				                                    <td><?php echo $row['diachi']?></td>
				                                    <td><?php echo $row['sdt']?></td>
				                                    <td><?php echo $row['mail']?></td>
				                                     <td><?php echo $row['macv']?></td>
				                                     <td><?php echo $row['pass']?></td>
				                                    <td><a href="delete.php?manv=<?php echo $row['manv']?>">Xóa</a></td>
				                                    <td><a href="edit.php?manv=<?php echo $row['manv']?>">Sửa</a></td>
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