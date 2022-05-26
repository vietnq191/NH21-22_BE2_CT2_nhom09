<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    function getAllEmails()
    {
        $mails = DB::Table('email_newsletter')->OrderBy('date', 'desc')->paginate(10);
        return view('admin-email-newsletter', [
            'mails' => $mails,
        ]);
    }

    function destroy($email)
    {
        $getRow = DB::Table('email_newsletter')->where('email', $email)->delete();

        if ($getRow == 0) {
            return redirect()->route('admin.email-letter')->with('unsuccess', 'Delete Unsuccess');
        }

        return redirect()->route('admin.email-letter')->with('success', 'Delete Success');
    }

    function find($email) {
        $mail = DB::Table('email_newsletter')->where('email', $email)->get();
        if (count($mail) == 0) {
            return redirect()->back();
        }

        return view('admin-send-mail', [
            'mail' => $mail,
        ]);

    }
}
