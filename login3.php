<link href="หน้าแรก.php.css" rel="stylesheet" type="text/css">
<?php 
session_start();
        if(isset($_POST['id'])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $id = $_POST['id'];
                  $password = ($_POST['password']);
				//query 
                  $sql="SELECT * FROM dorm_student Where id='$id' and password='$password' ";
				  //echo $sql;
 
                  $result=mysqli_query($db,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
 					  //echo $row["approve"];
                      $_SESSION["UserID"] = $row["id"];
                      $_SESSION["User"] = $row["name"];
                      $_SESSION["Userlevel"] = $row["approve"];
					  //echo $_SESSION["Userlevel"];
                      if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
						  
 						//$_SESSION["name"]=$row["name"];
                        Header("Location: admin.php");
 
                      }
 
                      elseif ($_SESSION["Userlevel"]=="P"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: ลองหน้าแรก.php");
 
                      }
					  elseif ($_SESSION["Userlevel"]==""){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: wait.php");
 
                      }
 					 elseif ($_SESSION["Userlevel"]=="F"){
                     echo "<script>";
                        echo "alert(\" มึงโดนไล่ออก\");"; 
                        echo "window.history.back()";
                    echo "</script>";}
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