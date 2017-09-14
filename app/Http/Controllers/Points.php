<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;

use App\Models\User as UserManager;
use App\Models\Item as ItemManager;

class Points extends Controller
{
	public function showVote()
	{
		return view('points.vote')
	}

	public function vote()
	{
		if ()
		{
			return redirect()->route('points.vote')->with(['error' => 'Vous devez encore attendre x minutes avant de pouvoir voter']);
		}

		$user = UserManager::find(Auth::user()->guid);

		$user->points += config('app.points.vote');
		$user->votes++;
		$user->heurevote = time();
		$user->save();

		return redirect()->route('points.vote');
	}

	public function showBuyPoints()
	{
		return view('points.buy');
	}

	public function buyPoints(Request $request)
	{
		$this->validate($request, [
			'code' => 'required|alpha_num|min:8',
		]);

		$dedipass = json_decode(file_get_contents('url'));

		if ($dedipass->status != 'success')
		{
			return redirect()->route('points.buy');
		}

		$user = UserManager::find(Auth::user()->guid);

		$user->points += config('app.points.buy');
		$user->save();

		return redirect()->route('account.general');
	}

	public function showLotery()
	{
		$items = ItemManager::where('lotery', 1)->orderByRaw('RAND()')->take(10)->get();

		return view('points.lotery', compact('items'));
	}

	public function playLotery(Request $request)
	{
		$this->validate($request, [
			'character' => 'required|numeric|exists:personnages,id',
		]);

		$item = ItemManager::where('lotery', 1)->orderByRaw('RAND()')->first();
		$user = UserManager::find(Auth::user()->guid);

		$user->points -= config('app.points.lotery');
		$user->save();

		return redirect()->route('points.lotery');
	}
}