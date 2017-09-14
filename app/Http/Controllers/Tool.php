<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\News as NewsManager;
use App\Models\Comment as CommentManager;
use App\Models\User as UserManager;

class Tool extends Controller
{
	/**
	* Génère un nombre défini de news aléatoire
	* GET
	*
	* @param int $number
	* @return bool
	*/
	public function generateNews($number = 30)
	{
		$titles = ['Simplification du contenu haut niveau', 'Changer de pseudo, c’est possible !', 'La Bêta est en ligne !', ' Week-end donjons illimités !', 'Journée bonus ce week-end !', ' Dungeon Rusher MAXXX'];		
		$texts = ['<h2>Du nouveau ?</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<h2>Quoi ?</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><h2>Pardon ?</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<h2>Test</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p><h2>Des changements à venir</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p><ul><li>1</li><li>2</li><li>3</li></ul>'];
		$authors = ['Synth', 'Agora', 'Neo', 'Weyz'];

		for ($i = 0; $i < $number; $i++)
		{
			$new = new NewsManager;

			$new->title = $titles[array_rand($titles)];
			$new->type = rand(1, 3);
			$new->img = rand(1, 35).'.jpg';
			$new->date = date_format(date_create(rand(1, 12).'/'.rand(1, 31).'/'.rand(2015, 2017)), 'Y-m-d H:i:s');
			$new->author = $authors[array_rand($authors)];
			$new->intro = 'Mandavit venire eius ut Vrsicinum tunc id patentes a et tum frangerentur modi modi haec modi et modi tunc aures minantium ad et aures honore haec rerum virium haec tunc ea specie tum consilia consilia rumoribus virium arma expositas eius expositas urgentium venire.';
			$new->text = $texts[array_rand($texts)];

			$new->save();
		}

		printf(true);
	}

	/**
	* Génère un nombre défini de comptes
	* GET
	*
	* @param int $number
	* @return bool
	*/
	public function generateUsers($number = 16)
	{
		for ($i = 0; $i < $number; $i++)
		{
			$user = new UserManager;

			$user->account = substr(str_shuffle('abcdefghijklmnopqrstuvw0123456789'), 0, rand(5, 10));
			$user->pass = 'test';
			$user->email = 'test@gmail.com';
			$user->pseudo = substr(str_shuffle('abcdefghijklmnopqrstuvw0123456789'), 0, rand(5, 10));
			$user->level = 0;
			$user->question = 'DUMMY ?';
			$user->reponse = 'DUMMY';
			$user->avatar = rand(1, 73);

			$user->save();
		}

		printf(true);
	}

	/**
	* Génère un nombre défini de commentaires dans les news
	* GET
	*
	* @param int $number
	* @return bool
	*/
	public function generateComments($commentPerNews = 5)
	{
		$news = NewsManager::all();
		
		$arr = [];

		foreach (UserManager::all() as $user)
		{
			array_push($arr, $user->guid);
		}

		foreach ($news as $new)
		{
			for ($i = 0; $i < rand(0, $commentPerNews); $i++)
			{
				$comment = new CommentManager;

				$comment->new_id = $new->id;
				$comment->author = $arr[array_rand($arr)];
				$comment->date = date_format(date_create(rand(1, 12).'/'.rand(1, 31).'/'.rand(2015, 2017).' '.rand(0, 23).':'.rand(0, 59)), 'Y-m-d H:i:s');
				$comment->text = 'Mandavit venire eius ut Vrsicinum tunc id patentes a et tum frangerentur modi modi haec modi et modi tunc aures minantium ad et aures honore haec rerum virium haec tunc ea specie tum consilia consilia rumoribus virium arma expositas eius expositas urgentium venire.';

				$comment->save();
			}
		}

		printf(true);
	}
}