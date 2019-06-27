<?php
namespace App\Controller;

use App\Core\Controller as BaseController;

class RegisterController extends BaseController{

	public function index(){

			$error = array();
		if(isset($_POST['submit'])){

			$userModel = new \App\Model\Users;
			if($userModel->emailCheck($_POST)){
				$error['email']="Email Already taken.Please Choose another email.";

			}

			if($userModel->checkPhone($_POST)){
				$error['phone']="Invalid Phone number.";


			}

			if($userModel->strongPasswd($_POST)){
				$error['password']="Choose a Strong Password";

			}

			if($userModel->passwordsEqual($_POST)){
				$error['equal']= "The two passwords do not match";

			}

			else{
				$userModel->signUp($_POST);
				$this->redirect('register/index');
			}
		}

		//For Login
		if (isset($_POST['loginSmt']))
		{
			$loginModel=new \App\Model\Users;

			if ($loginModel->login($_POST))
			{
				return $this->redirect('welcome/welcome');

			}
			else
			{
				echo "Invalid Username/Password";
			}
		}

		$this->render('register/index',['errorString'=> $error] );
	}


}  