<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendEmailController extends Controller
{
    //Send 1 email
    public function send(Request $request) {
        $mail_data = [
            'recipient'=>$request->email,
            'fromEmail'=>'Backend2.2022@gmail.com',
            'fromName'=>'Ogani Shop',
            'subject'=>$request->subject,
            'body'=>$request->message
        ];

        \Mail::send('email-template', $mail_data, function($message) use ($mail_data){
            $message->to($mail_data['recipient'])
            ->from($mail_data['fromEmail'],$mail_data['fromName'])
            ->subject($mail_data['subject']);
        });

        return redirect()->back()->with('success', 'Email sent');
    }

    //Send all email
    public function send_all(Request $request) {
        $getAllMails = DB::Table('email_newsletter')->get();

        if (count($getAllMails) > 0) {
            foreach ($getAllMails as $value) {
                $mail_data = [
                    'recipient'=>$value->email,
                    'fromEmail'=>'Backend2.2022@gmail.com',
                    'fromName'=>'Ogani Shop',
                    'subject'=>$request->subject,
                    'body'=>$request->message
                ];
        
                \Mail::send('email-template', $mail_data, function($message) use ($mail_data){
                    $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'],$mail_data['fromName'])
                    ->subject($mail_data['subject']);
                });
            }

            //Back the page
            return redirect()->back()->with('success', 'Email sent');
        }
        
        return redirect()->back()->with('unsuccess', 'Send Email Error');
    }

    //Subcribe to receive Email
    public function receiveEmail(Request $request) {
        $message = "Thank you for subscribing to our newsletter!
       We will send you a notification soon.";

        $mail_data = [
            'recipient'=>$request->email,
            'fromEmail'=>'Backend2.2022@gmail.com',
            'fromName'=>'Ogani Shop',
            'subject'=>"Sign up for newsletter successfully",
            'body'=>$message
        ];

        //Check mail is already exits
        $checkExit = DB::Table('email_newsletter')->where('email', $request->email)->get();

        if(count($checkExit) == 0) {
            \Mail::send('email-template', $mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                ->from($mail_data['fromEmail'],$mail_data['fromName'])
                ->subject($mail_data['subject']);
            });
    
            DB::Table('email_newsletter')->insert(['email'=>$request->email]);
    
            return redirect()->back()->with('receiveEmailSuccess', 'Sign up for newsletter successfully');
        }

        return redirect()->back()->with('receiveEmailError', 'Please try again to receive our newsletter');
    }
}