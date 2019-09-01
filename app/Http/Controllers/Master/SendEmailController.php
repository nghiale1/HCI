<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MailLog;
use Carbon\Carbon;
use Mail;
use App\Mail\SendEmail;

class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admins.mails.send_mail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'      => 'required|email',
            'subject'    => 'required',
            'message'    => 'required',
            'file'     => 'mimes:doc,docx,pdf,zip,xlsx,png'
        ]);
        $mails = new MailLog();

        $mails->mail_log_to             = $request->get('email');
        $mails->mail_log_subject        = $request->get('subject');
        $mails->mail_log_body           = $request->get('message');
        $mails->mail_log_date_time      = Carbon::now(); 
        $mails->mail_log_file           = $request->get('file');

        dd($mails);
        // Mail::to($mails->mail_log_to)->send(new SendEmail($mails->mail_log_subject,$mails->mail_log_body,$mails->mail_log_file));
        // return back()->with('success','Add Data Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
