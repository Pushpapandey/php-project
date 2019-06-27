<?php
namespace App\Controller;

use App\Core\Controller as BaseController;

class RegisterController extends BaseController{

	public function index(){

		if(isset($_POST['submit'])){
			$userModel = new \App\Model\Users;
			if($userModel->emailCheck($_POST)){
				$userError="Email Already taken.Please Choose another email.";
				$this->render('register/index',['errorString'=>$userError]);
				$this->redirect('register/index');

			}

			if($userModel->checkPhone($_POST)){
				$phoneError="Invalid Phone number.";
				$this->render('register/index',['errorPhone'=>$phoneError]);
				$this->redirect('register/index');


			}

			if($userModel->strongPasswd($_POST)){
				$strongPasswordError="Choose a Strong Password";
				$this->render('register/index',['errorPasswd'=>$strongPasswordError]);
				$this->redirect('register/index');

			}

			if($userModel->passwordsEqual($_POST)){
				$equalError= "The two passwords do not match";
				$this->render('register/index',['errorCheck'=>$equalError]);
				$this->redirect('register/index');

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
				$this->redirect('register/welcome');

			}
			else
			{
				echo "Invalid";
			}
		}

		$this->render('register/index');
	}


}  