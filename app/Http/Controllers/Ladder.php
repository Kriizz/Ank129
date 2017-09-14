<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cache;

use App\Models\Player as PlayerManager;
use App\Models\Guild as GuildManager;

class Ladder extends Controller
{
	/**
	* Affiche le top 3 du classement dans chaque catégorie
	* GET
	*
	* @return Response
	*/
	public function showHome()
	{
		$players_exp = Cache::remember('gen_exp', 60, function () {
			return PlayerManager::orderby('xp', 'DESC')->take(3)->get();
		});
		$players_honor = Cache::remember('gen_honor', 60, function () {
			return PlayerManager::orderby('honor', 'DESC')->take(3)->get();
		});
		$guilds = Cache::remember('gen_guilds', 60, function () {
			return GuildManager::orderBy('xp', 'DESC')->take(3)->get();
		});

		return view('ladder.home', compact('players_exp', 'players_honor', 'guilds'));
	}

	/**
	* Affiche le classement des personnages selon l'expérience
	* GET
	*
	* @return Response
	*/
	public function showExperience()
	{
		$players = Cache::remember('ladder_exp', 60, function () {
			return PlayerManager::orderBy('xp', 'DESC')->take(config('app.ladder_limit'))->get();
		});

		return view('ladder.exp', compact('players'));
	}

	/**
	* Affiche le classement des personnages selon l'honneur
	* GET
	*
	* @return Response
	*/
	public function showHonor()
	{
		$players = Cache::remember('ladder_honor', 60, function () {
			return PlayerManager::orderBy('honor', 'DESC')->take(config('app.ladder_limit'))->get();
		});

		return view('ladder.honor', compact('players'));
	}

	/**
	* Affiche le classement des guildes selon l'expérience
	* GET
	*
	* @return Response
	*/
	public function showGuilds()
	{
		$guilds = GuildManager::orderBy('xp', 'DESC')->take(config('app.ladder_limit'))->get();

		return view('ladder.guilds', compact('guilds'));
	}
}