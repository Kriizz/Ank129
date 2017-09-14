<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Cache;

use App\Models\News as NewsManager;
use App\Models\Staff as StaffManager;

class Misc extends Controller
{
	/**
	* Affiche la page d'accueil
	* GET
	*
	* @return Response
	*/
	public function showHomepage()
	{
		$news = NewsManager::orderBy('date', 'DESC')->take(10)->get();

		return view('homepage', compact('news'));
	}

	/**
	* Affiche la page pour télécharger le serveur
	* GET
	*
	* @return Response
	*/
	public function showJoin()
	{
		return view('misc.join');
	}

	/**
	* Affiche les règles
	* GET
	*
	* @return Response
	*/
	public function showRules()
	{
		return view('misc.rules');
	}

	/**
	* Affiche les conditions d'utilisation
	* GET
	*
	* @return Response
	*/
	public function showCgu()
	{
		return view('misc.cgu');
	}

	/**
	* Affiche le statut des serveurs
	* GET
	*
	* @return Response
	*/	
	public function showServersStatus()
	{
		return view('misc.servers');
	}

	/**
	* Affiche toute l'équipe
	* GET
	*
	* @return Response
	*/
	public function showStaff()
	{
		$staffs = StaffManager::orderBy('rank', 'ASC')->get();

		return view('misc.staff', compact('staffs'));
	}
}