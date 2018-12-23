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
                                            $sql="SELECT * from nhahang,quan where nhahang.maquan=quan.maquan and tennh LIkE '%".$Search."%'";
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
                                                    <td><?php echo $row['manh']?></td>
				                                    <td><?php echo $row['tennh']?></td>
				                                    <td><?php echo $row['diachi']?></td>
				                                    <td><?php echo $row['sdt']?></td>
				                                    <td><?php echo $row['quan']?></td>
				                                     <td><?php echo $row['user']?></td> 
				                                     <td><?php echo $row['password']?></td>
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