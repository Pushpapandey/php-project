<?php 

namespace App\Model;

use App\Core\Model as BaseModel;

class Users extends BaseModel{


  public function emailCheck($array){
      $email=$array['mail'];
       $sql = "SELECT COUNT(email) AS count FROM users WHERE email='$email';";
        $row=$this->db->query($sql);
        $resultArray= $row->fetch_assoc();
        if ($resultArray['count']==0) {
          return false;
        }
        else{
          return true;
        }
  }

  public function checkPhone($array){
    $phone=$array['ph_no'];
    if(!preg_match('/(^9[0-9]{9})$/',$phone))
    {
      return true;
    }
    else return false;

  }

  public function strongPasswd($array){
    $passwd1=$array['passwd1'];
    if (!preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/',$_POST['passwd1'])){
      return true;
    }
    else return false;
  }

  public function passwordsEqual($array)
{
    $passwd1=$array['passwd1'];
    $passwd2=$array['passwd2'];
    if ($passwd1!=$passwd2) {
      return true;
    }
    else return false;
}	

public function signUp($array){
    $email=$array['mail'];
    $address=$array['address'];
    $dob=$array['dob'];
    $gender=$array['gender'];
    $temp=$array['passwd1'];
    $passwd=password_hash($temp, PASSWORD_DEFAULT);
    $fname=$array['fname'];
    $lname=$array['lname'];
    $phone=$array['ph_no'];
    
            // sql to insert
    $sql = "INSERT INTO users
      			(address,email,dob,gender,password,f_name,l_name,phone_no)
      			VALUES
      			('$address','$email','$dob','$gender','$passwd','$fname','$lname','$phone')
      			;";
        
        $this->db->query($sql);
	}

  public function login($array){
    $email=$array['mail'];
    $passwd=$array['passwd'];

    $sql = "SELECT email FROM users WHERE email='$email';";
    $row=$this->db->query($sql);
    $resultArray= $row->fetch_assoc();
    $mail=$resultArray['email'];

    if ($resultArray['email']==NULL) 
    {
      echo "Invalid Username/Password";
      return false;
    }
    else
    {
        $email=$array['mail'];
        $passwd=$array['passwd'];
        $sql = "SELECT user_id,password,f_name FROM users WHERE email='$email';";
        $row=$this->db->query($sql);
        $resultArray= $row->fetch_assoc();
        $userID=$resultArray['user_id'];
        $dbPassword=$resultArray['password'];
        $userName=$resultArray['f_name'];

        if (password_verify($passwd,$dbPassword)) 
        {    
          $_SESSION['userID']=$userID;
          $_SESSION['userName']=$userName;
          $_SESSION['error']=0;
          return true;
        }
    }

  }

}