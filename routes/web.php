<?php

/* MISC */
Route::get('/', 'Misc@showHomepage')->name('homepage');
Route::get('join', 'Misc@showJoin')->name('join');
Route::get('rules', 'Misc@showRules')->name('rules');
Route::get('cgu', 'Misc@showCgu')->name('cgu');
Route::get('status', 'Misc@showServersStatus')->middleware('module:servers')->name('servers');
Route::get('staff', 'Misc@showStaff')->middleware('module:staff')->name('staff');
/* NEWS */
Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
	Route::get('/', 'News@showAll')->name('all');
	Route::get('{id}-{title}', 'News@showOne')->where(['id' => '[0-9]+', 'title' => '[a-zA-Z-_]+'])->name('detail');
	Route::post('{id}-{title}/comment', 'News@postComment')->where(['id' => '[0-9]+', 'title' => '[a-zA-Z-_]+'])->name('comment');
});
/* LADDER */
Route::group(['prefix' => 'ladder', 'as' => 'ladder.', 'middleware' => 'module:ladder'], function () {
	Route::get('/', 'Ladder@showHome')->name('home');
	Route::get('experience', 'Ladder@showExperience')->name('exp');
	Route::get('honor', 'Ladder@showHonor')->name('honor');
	Route::get('guilds', 'Ladder@showGuilds')->name('guilds');
});
/* SUPPORT */
Route::get('support/faq', 'Support@showFaq')->middleware('module:support')->name('support.faq');
/* NOT LOGGED */
Route::group(['middleware' => 'not_logged'], function () {
	/* USER */
	Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
		Route::get('login', 'User@showLogin')->name('login');
		Route::post('login', 'User@loginUser');
		Route::get('register', 'User@showRegister')->name('register');
		Route::post('register', 'User@registerUser');
	});
	/* PASSWORD */
	Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
		Route::get('/', 'Password@showForget')->name('forget');
		Route::post('/', 'Password@forgetPassword');
		Route::get('{code}/change')->where(['code' => '[A-Z0-9]+'])->name('change');
		Route::post('{code}/change')->where(['code' => '[A-Z0-9]+']);
	});
});	
/* LOGGED */
Route::group(['middleware' => 'logged'], function () {
	/* USER */
	Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
		Route::get('logout', 'User@logoutUser')->name('logout');
		Route::get('manage', 'User@showAccount')->name('manage');
	});
	/* SUPPORT */
	Route::group(['prefix' => 'support', 'as' => 'support.', 'middleware' => 'module:support'], function () {
		Route::get('tickets', 'Support@showMyTickets')->name('tickets');
		Route::get('ticket/{id}-{title}', 'Support@showTicket')->where(['id' => '[0-9]+', 'title' => '[a-zA-Z-_]+'])->name('ticket');
	});
});
/* DEBUG ROUTES DO NOT USE */
Route::group(['prefix' => 'debug', 'middleware' => 'debug'], function () {
	Route::get('news', 'Tool@generateNews');
	Route::get('comments', 'Tool@generateComments');
	Route::get('users', 'Tool@generateUsers');
});