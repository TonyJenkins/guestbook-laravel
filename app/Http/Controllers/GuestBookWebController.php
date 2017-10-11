<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuestBookEntry;

class GuestBookWebController extends Controller
{
    public function displayGuestBook()
    {
        $entries = GuestBookEntry::get();

        return view('guestbookform', ['entries' => $entries]);
    }

    public function addComment(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'comment' => 'required',
        ]);

        $entry = new GuestBookEntry();

        $entry->user = $request->user;
        $entry->comment = $request->comment;
        $entry->save();

        return redirect('/');
    }

    public function deleteComment($id)
    {
        GuestBookEntry::destroy($id);

        return redirect('/');
    }

    public function editComment($id)
    {
        $entries = GuestBookEntry::get();
        $entry = GuestBookEntry::find($id);

        return view('editguestbookform', ['entry' => $entry, 'entries' => $entries]);
    }

    public function saveComment(Request $request, $id)
    {
        $request->validate([
            'user' => 'required',
            'comment' => 'required',
        ]);

        $entry = GuestBookEntry::find($id);

        $entry->user = $request->user;
        $entry->comment = $request->comment;
        $entry->save();

        return redirect('/');
    }
}
