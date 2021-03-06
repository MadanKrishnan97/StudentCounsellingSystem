
<?php
require('Database.php');
//$db = Database::getInstance();
//$mysqli = $db->getConnection();
class DbFunction{
	
	function login($loginid,$password){
	
      if(!ctype_alpha($loginid) || !ctype_alpha($password)){
      	
        echo "<script>alert('Either LoginId or Password is Missing')</script>";
      
      }		
   else{		
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT loginid, password FROM tbl_login where loginid=? and password=? ";
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){
		
		trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
	}
	
	else{
		
		$stmt->bind_param('ss',$loginid,$password);
		$stmt->execute();
		$stmt -> bind_result($loginid,$password);
		$rs=$stmt->fetch();
		if(!$rs)
		{
			echo "<script>alert('Invalid Details')</script>";
			header('location:login.php');
		}
		else{
			
			header('location:add-course.php');
		}
	}
	
	}
	
	}
	
	function create_course($cshort,$clastname,$clocation,$cdate){
		
				if($cshort==""){
			 
			echo "<script>alert('Select  Course Short Name')</script>";
		
		}
		
		
		else if($clastname==""){
			 
			echo "<script>alert('Select  Course Location')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into tbl_course(cshort,clastname,clocation,cdate)values(?,?,?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('ssss',$cshort,$clastname,$clocation,$cdate);
				$stmt->execute();
				echo "<script>alert('Course Added Successfully')</script>";
					//header('location:login.php');
				
			}
		}				
	}

function showCourse(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM tbl_course ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showCourse1($cid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM tbl_course  where cid='".$cid."'";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showPayment1($pid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM payment  where payid='".$pid."'";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showSubject(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM subject ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showPayment(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM payment ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showAppointment(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM appointment ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showBranch(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM branch ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showSession(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM session  ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showSubject1($sid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM subject where stuid='$sid' ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}

function showBranch1($sid){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM branch where bid='$sid' ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}


function create_subject($sfirstname,$slastname,$sphone,$semail){
		
				if($sfirstname==""){
			 
			echo "<script>alert('Select  Course Short Name')</script>";
		
		}
		
		
		else if($slastname==""){
			 
			echo "<script>alert('Select  Course Full Name')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into subject(sfirstname,slastname,sphone,semail)values(?,?,?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('ssss',$sfirstname,$slastname,$sphone,$semail);
				$stmt->execute();
				echo "<script>alert('Course Added Successfully')</script>";
					
				
			}
		}				
	}

	function create_appointment($adate,$atime,$astuid,$acid,$abranchid,$cdate){
		
				if($adate==""){
			 
			echo "<script>alert('Select Appointment Date')</script>";
		
		}
		
		
		else if($atime==""){
			 
			echo "<script>alert('Select Appointment Time')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into appointment(adate,atime,astuid,acid,abranchid,cdate)values(?,?,?,?,?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('ssssss',$adate,$atime,$astuid,$acid,$abranchid,$cdate);
				$stmt->execute();
				echo "<script>alert('Appointment Added Successfully')</script>";
					
				
			}
		}				
	}

	function create_branch($bname,$baddress){
		
				if($bname==""){
			 
			echo "<script>alert('Select Branch Name')</script>";
		
		}
		
		
		else if($baddress==""){
			 
			echo "<script>alert('Select  Branch Address')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into branch(bname,baddress)values(?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('ss',$bname,$baddress);
				$stmt->execute();
				echo "<script>alert('Branch Added Successfully')</script>";
					//header('location:login.php');
				
			}
		}				
	}

	function create_payment($aid,$pamt){
		
				if($aid==""){
			 
			echo "<script>alert('Select Appointment ID')</script>";
		
		}
		
		
		else if($pamt==""){
			 
			echo "<script>alert('Select Payment Amount')</script>";
		
		}
		
		else{
			
			
			$db = Database::getInstance();
			$mysqli = $db->getConnection();
			$query = "insert into payment(aid,pamt)values(?,?)";
			$stmt= $mysqli->prepare($query);
			if(false===$stmt){
			
				trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			}
			
			else{
			
				$stmt->bind_param('ss',$aid,$pamt);
				$stmt->execute();
				echo "<script>alert('Payment Added Successfully')</script>";
					//header('location:login.php');
				
			}
		}				
	}


function showCountry(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM countries ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	
function showStudents(){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM registration ";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	

function showStudents1($id){
	
	$db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "SELECT * FROM registration  where id='".$id."'";
	$stmt= $mysqli->query($query);
	return $stmt;
	
}	

function register($cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
				   $pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$session){
 			          
 			        $db = Database::getInstance();
		           	$mysqli = $db->getConnection();
		           	
		           //	echo $session;exit;
   $query = "INSERT INTO `registration` (`course`, `subject`, `fname`, `mname`, `lname`, `gender`, `gname`, `ocp`,
                     `income`, `category`, `pchal`, `nationality`, `mobno`, `emailid`, `country`, `state`, `dist`, 
					 `padd`, `cadd`, `board`, `board1`,`roll`,`roll1`,`pyear`,`yop1`,`sub`,`sub1`,`marks`,`marks1`,
					 `fmarks`,`fmarks1`,`session`,regno) 
                   VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			        $reg=rand();
			        $stmt= $mysqli->prepare($query);
			        if(false===$stmt){
			
			     	trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			    }
			
			    else{
			
			$stmt->bind_param('sssssssssssssssssssssssssssssssss',
		         	$cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,$nation,$mobno,
					$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,$pyear1,$pyear2,
					$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$session,$reg);
			$stmt->execute();
		   	echo "<script>alert('Successfully Registered , your registration number is $reg')</script>";
		 	//header('location:login.php');
				
		  }
				


       }


function edit_course($cshort,$clastname,$clocation,$udate,$id){

    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	//echo $cshort.$cfull.$udate.$id;exit;
	$query = "update tbl_course set cshort=?,clastname=?,clocation=?,cdate=? where cid=?";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('ssssi',$cshort,$clastname,$clocation,$udate,$id);
	$stmt->execute();
    echo '<script>'; 
    echo 'alert("Course Updated Successfully")'; 
    echo '</script>';

}

function edit_payment($aid,$pamt,$id){
	
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		//echo $cshort.$cfull.$udate.$id;exit;
		$query = "update payment set aid=?,pamt=? where payid=?";
		$stmt= $mysqli->prepare($query);
		$stmt->bind_param('ssi',$aid,$pamt,$id);
		$stmt->execute();
		echo '<script>'; 
		echo 'alert("Payment Updated Successfully")'; 
		echo '</script>';
	
	}


function edit_subject($sfirstname,$slastname,$sphone,$semail,$udate,$id){

    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "update subject set sfirstname=?,slastname=? ,sphone=?,semail=?,dt_created=? where stuid=?";
	$stmt= $mysqli->prepare($query);
	$stmt->bind_param('sssssi',$sfirstname,$slastname,$sphone,$semail,$udate,$id);
	$stmt->execute();
    echo '<script>'; 
    echo 'alert("Subject Updated Successfully")'; 
    echo '</script>';

}

function edit_branch($bname,$baddress,$id){
	
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query = "update branch set bname=?,baddress=? where bid=?";
		$stmt= $mysqli->prepare($query);
		$stmt->bind_param('ssi',$sbname,$baddress,$id);
		$stmt->execute();
		echo '<script>'; 
		echo 'alert("Branch Updated Successfully")'; 
		echo '</script>';
	
	}

function edit_std($cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
				   $pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$id){
  // echo $id;exit;
    $db = Database::getInstance();
	$mysqli = $db->getConnection();
	$query = "update registration set course=?,subject=?,fname=?,mname=?,lname=?,gender=?,gname=?,ocp=?
              , income=?,category=?,pchal=?,nationality=?,mobno=?,emailid=?,country=?,state=?,dist=?
         	 ,padd=?,cadd=?,board=?,roll=?,pyear=?,sub=?,marks=?,fmarks=?,board1=?,roll1=?,yop1=?,sub1=?
              ,marks1=?,fmarks1=? where id=?" ;
    //echo $query;
	$stmt= $mysqli->prepare($query);
	if(false===$stmt){
			
			     	trigger_error("Error in query: " . mysqli_connect_error(),E_USER_ERROR);
			    }

	$rc=$stmt->bind_param('sssssssssssssssssssssssssssssssi',$cshort,$cfull,$fname,$mname,$lname,$gender,$gname,$ocp,$income,$category,$ph,
                  $nation,$mobno,$email,$country,$state,$city,$padd,$cadd,$board1,$board2,$roll1,$roll2,
				   $pyear1,$pyear2,$sub1,$sub2,$marks1,$marks2,$fmarks1,$fmarks2,$id);
				   
    //echo $rc;
 if ( false===$rc ) {
 
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
  }		   
	$rc=$stmt->execute();
	
	if ( false==$rc ) {
          die('execute() failed: ' . htmlspecialchars($stmt->error));
    }
	else{
         echo '<script>'; 
         echo 'alert(" Successfully Updated")'; 
          echo '</script>';
		}  
  
}


function del_course($id){

   //  echo $id;exit;
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from tbl_course where cid=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('s',$id);
	$stmt->execute();
    echo "<script>alert('Course has been deleted')</script>";
    echo "<script>window.location.href='view-course.php'</script>";
}

function del_payment($id){
	
	   //  echo $id;exit;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query="delete from payment where payid=?";
		$stmt= $mysqli->prepare($query);
		$stmt->bind_param('s',$id);
		$stmt->execute();
		echo "<script>alert('Payment has been deleted')</script>";
		echo "<script>window.location.href='view-payment.php'</script>";
	}

function del_branch($id){
	
	   //  echo $id;exit;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query="delete from branch where bid=?";
		$stmt= $mysqli->prepare($query);
		$stmt->bind_param('s',$id);
		$stmt->execute();
		echo "<script>alert('Branch has been deleted')</script>";
		echo "<script>window.location.href='view-branch.php'</script>";
	}

function del_appointment($id){
	
	   //  echo $id;exit;
		$db = Database::getInstance();
		$mysqli = $db->getConnection();
		$query="delete from appointment where aid=?";
		$stmt= $mysqli->prepare($query);
		$stmt->bind_param('s',$id);
		$stmt->execute();
		echo "<script>alert('Appointment has been deleted')</script>";
		echo "<script>window.location.href='view-course.php'</script>";
	}

function del_std($id){

   $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from registration where id=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('i',$id);
	$stmt->execute();
    echo "<script>alert('One record has been deleted')</script>";
    echo "<script>window.location.href='view-course.php'</script>";

}

 function del_subject($id){

     //echo $id;exit;
    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    $query="delete from subject where stuid=?";
    $stmt= $mysqli->prepare($query);
    $stmt->bind_param('i',$id);
	$stmt->execute();
    echo "<script>alert('Subject has been deleted')</script>";
   // echo "<script>window.location.href='view-course.php'</script>";
}

}

?>



