<?php
	 
	 namespace App\Http\Controllers;
	 
	 use App\Http\Requests\SigninRequest;
	 use App\Http\Requests\SignupRequest;
	 use App\User;
	 use Session;
	 
	 class UserController extends MainController
	 {
	 	 function __construct() {
	 	 	 parent::__construct();
	 	 	 $this->middleware('authguard',['except' => ['logOut']]);
		 }
		 
			public function getSignin()
			{
				 self::$data['title'] .= 'sign-in';
				 return view('forms.signin', self::$data);
			}
			
			public function postSignin(SigninRequest $request)
			{
				 $rt = !empty($request['rt']) ? $request['rt'] : ''; //shop/cart
				 if(User::verify($request['email'],
						 $request['password'])) {
				 	 return redirect($rt);
						
				 } else {
						self::$data['title'] .= 'sign-in';
						return view('forms.signin', self::$data)->withErrors('wrong email and password');
				 }
			}
			
			public function getSignup()
			{
				 self::$data['title'] .= 'signup page';
				 return view('forms.signup', self::$data);
			}
			
			public function postSignup(SignupRequest $request){
			
					User::saveNew($request);
					return redirect('');
			}
			
			
			public function logOut()
			{
				 Session::flush();
				 return redirect('user/signin');
			}
	 }
