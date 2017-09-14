<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Models\User as UserManager;

class User extends Controller
{

	public function showLogin()
	{
		return view('user.login');
	}

	public function loginUser(Request $request)
	{
		$this->validate($request, [
			'account' 	=> 'required|alpha_num|exists:auth.accounts,account',
			'password' 	=> 'required|alpha_num',
		]);

		if (Auth::attempt(['account' => $request->account, 'password' => $request->password]))
		{
			return redirect()->route('user.manage');
		}

		$request->session()->flash('error', 'Nom de compte ou mot de passe incorrect.');

		return redirect()->route('user.login')->withInput();
	}

	public function showRegister()
	{
		return view('user.register');
	}

	public function registerUser(Request $request)
	{
		$this->validate($request, [
			'account' 				=> 'required|alpha_num|min:6|max:19|unique:auth.accounts,account',
			'password' 				=> 'required|alpha_num|min:6',
			'nickname' 				=> 'required|alpha_num|min:6|max:19|unique:auth.accounts,pseudo',
			'email' 				=> 'required|email',
			'secret_question' 		=> 'required|string',
			'secret_answer' 		=> 'required|alpha_num',
			'g-recaptcha-response' 	=> 'required|recaptcha',
		]);

		$user = new UserManager;

		$user->account 	= $request->account;
		$user->pass 	= $request->password;
		$user->pseudo 	= $request->nickname;
		$user->email 	= $request->email;
		$user->question = $request->secret_question;
		$user->reponse 	= $request->secret_answer;
		$user->code 	= $this->_generateUniqueCode(8);
		$user->save();

		Auth::login($user);

		return redirect()->route('join');
	}

	private function _generateUniqueCode($length=10)
	{
		$pattern = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$code = substr(str_shuffle($pattern), 0, $length-1);

		while (UserManager::where()->count() > 0)
		{
			$code = substr(str_shuffle($pattern), 0, $length-1);
		}

		return $code;
	}

	public function showAccount()
	{
		return view('user.manage');
	}

	public function logoutUser()
	{
		Auth::logout();

		return redirect()->route('homepage');
	}
}