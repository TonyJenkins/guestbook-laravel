<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuestBookEntry;
use DB;

class GuestBookRestController extends Controller
{
    public function getAllComments()
    {
        return GuestBookEntry::get();
    }

    public function getCommentById($id)
    {
        return GuestBookEntry::find($id);
    }

    public function getDistinctUsers()
    {
        return GuestBookEntry::groupBy('user')->pluck('user');
    }

    public function getNumberOfComments()
    {
        return GuestBookEntry::count();
    }

    public function getAverageCommentLength()
    {
        return DB::table('guest_book_entries')
                     ->select(DB::raw('avg (length (comment))'))
                     ->get();
    }

    public function getLongestComment()
    {
        return DB::table('guest_book_entries')
                     ->select(DB::raw('max(length (comment))'))
                     ->get();
    }

    public function deleteComment($id)
    {
        GuestBookEntry::destroy($id);
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
    }

    public function updateComment(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'comment' => 'required',
        ]);

        $entry = GuestBookEntry::find($id);

        $entry->user = $request->user;
        $entry->comment = $request->comment;
        $entry->save();
    }
}
