<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use Illuminate\Http\Request;

use App\Models\User as UserManager;

class Password extends Controller
{
	public function showForget()
	{
		return view('password.forget');
	}

	public function forgetPassword(Request $request)
	{
		$this->validate($request, [
			'login' 			   => 'required|alpha_num|exists:accounts,account',
			'g-recaptcha-response' => 'required|recaptcha',
		]);

		$user = UserManager::where('account', $request->login)->first();

		if ($user)
		{
			return redirect()->route('password.change', ['code' => $user->code]);
		}

		return redirect()->route('password.forget');
	}

	public function showChange($code)
	{
		$user = UserManager::where('code', $code)->firstOrFail();

		return view('password.change', compact('user'));
	}

	public function changePassword(Request $request, $code)
	{
		$user = UserManager::where()->firstOrFail();

		$this->validate($request, [
			'new_password' 	=> 'required|alpha_num|min:6',
			'conf_password' => 'required|alpha_num|same:new_password',
			'answer' 		=> 'required|exists:accounts,reponse,guid,'.$user->guid,
		]);

		$user->pass = $request->new_password;
		$user->save();

		$request->session()->flash('notify', 'Le mot de passe a été modifié.');

		return redirect()->route('home');
	}
}