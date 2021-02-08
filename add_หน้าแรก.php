<?php 
session_start();
                include("connection.php");
                  $name = $_POST['name'];
                  $bed = ($_POST['bed']);
				  $room = ($_POST['room']);
				  $floor = ($_POST['floor']);
				  $building = ($_POST['building']);
                  $sql="SELECT * FROM dorm_student Where name='$name' and bed='$bed' and room='$room' and floor='$floor and building='$building' ";
				  echo $sql;
 
                  $result=mysqli_query($db,$sql);
 
                  $row = mysqli_fetch_array($result);
 
                  $_SESSION["Name"] = $row["name"];
				  $_SESSION["Bed"] = $row["bed"];
				  $_SESSION["Room"] = $row["room"];
				  $_SESSION["Floor"] = $row["floor"];
				  $_SESSION["Building"] = $row["building"];

 
                      if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
						  
 						//$_SESSION["name"]=$row["name"];
                        Header("Location: admin.php");
 
                      }
 
                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: ลองหน้าแรก.php");
 
                      }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
 
 
             Header("Location: form_login.php"); //user & password incorrect back to login again
 
        }
?>