<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Models\News as NewsManager;
use App\Models\Comment as CommentManager;

use App\Library\News as NewsLibrary;

class News extends Controller
{
	/**
	* Affiche toutes les actualités
	* GET
	*
	* @param Request $request
	* @param NewsLibrary $newsLib
	* @return Response
	*/
	public function showAll(Request $request, NewsLibrary $newsLib)
	{
		$cat = $request->input('cat');

		if (!is_null($cat) && !array_key_exists($cat, $newsLib->types))
		{
			abort(404);
		}

		switch ($cat)
		{
			case 1: $type = compact('cat'); break;
			case 2: $type = compact('cat'); break;
			case 3: $type = compact('cat'); break;
			case null: $type = [1, 2, 3]; break;
		}

		$news = NewsManager::orderBy('date', 'desc')->whereIn('type', $type)->paginate(10);

		if (!is_null($cat))
		{
			$news->appends(['cat' => $cat]);
		}

		return view('news.all', compact('news'));
	}

	/**
	* Affiche une actualité en détail
	* GET
	*
	* @param int $id
	* @param string $title
	* @return Response
	*/
	public function showOne($id, $title)
	{
		$new = NewsManager::findOrFail($id);
		$comments = $new->comments()->paginate(10);
		$lasts = NewsManager::orderBy('date', 'DESC')->take(5)->get();

		return view('news.detail', compact('new', 'comments', 'lasts'));
	}

	/**
	* Poste un commentaire sur une news
	* POST
	*
	* @param Request $request
	* @param int $id
	* @param string $title
	* @return Response
	*/
	public function postComment(Request $request, $id, $title)
	{
		$new = NewsManager::findOrFail($id);

		$this->validate($request, [
			'comment' => 'required|string',
		]);

		$comment = new CommentManager;

		$comment->new_id = $id;
		$comment->date = date('Y-m-d H:i:s');
		$comment->author = Auth::user()->id;
		$comment->text = $request->comment;

		$comment->save();

		return redirect()->route();
	}
}