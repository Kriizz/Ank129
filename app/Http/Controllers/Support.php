<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Models\Ticket as TicketManager;

class Support extends Controller
{
	public function showFaq()
	{
		return view('support.faq');
	}

	public function showMyTickets()
	{
		$tickets = TicketManager::where('author', Auth::user()->guid)->where('closed', '!=', 1)->orderBy('last_date', 'DESC')->get();

		return view('support.tickets', compact('tickets'));
	}

	public function showTicket($id, $title)
	{
		$ticket = TicketManager::findOrFail($id);
		$answers = $ticket->answers()->orderBy('date', 'ASC')->paginate(10);

		return view('support.ticket', compact('ticket', 'answers'));
	}

	public function answerTicket(Request $request, $id, $title)
	{
		$this->validate($request, [
			'answer' => 'required|string',
		]);

		$ticket = TicketManager::findOrFail($id);

		$ticket->answers()->create([
			'author' 	=> Auth::user()->guid,
			'ticket_id' => $id,
			'date' 		=> date('Y-m-d H:i:s'),
			'text' 		=> $request->answer,
		]);

		$request->session()->flash('notify', 'Votre réponse a bien été sauvegardé.');

		return redirect()->route('support.tickets');
	}
}