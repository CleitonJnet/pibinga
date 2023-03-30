<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Ministeries;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function welcome(){
        return view('website.welcome');
    }

    public function history(){
        return view('website.history');
    }

    public function cell(){
        return view('website.cell');
    }

    public function ministeries(){
        return view('website.ministeries',[
            'ministeries' => Ministeries::all()
        ]);
    }

    public function ministery($id){
        return view('website.ministery',[ 'ministery' => Ministeries::find($id) ]);
    }

    public function messages(){
        return view('website.messages', [
            'messages' => Messages::paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'messages'
            )
        ]);
    }

    public function news(){
        return view('website.news');
    }

    public function contact(){
        return view('website.contact');
    }

    public function events(){
        return view('website.events');
    }

    public function gift(){
        return view('website.gift');
    }

    public function event(){
        return view('website.event');
    }

    public function activity(){
        return view('website.activity');
    }

    public function all_news(){
        return view('website.all_news');
    }

    public function confirm(){
        return view('website.newsletter_confirm');
    }

    public function answer(){
        return view('website.newsletter_answer');
    }

    public function courses(){
        return view('website.courses');
    }

    public function course(){
        return view('website.course');
    }

    public function maa(){
        return view('website.maa');
    }

    public function mcm(){
        return view('website.mcm');
    }

    public function umhb(){
        return view('website.umhb');
    }

    public function conecta(){
        return view('website.conecta');
    }

    public function embaixadores(){
        return view('website.embaixadores');
    }

    public function sag(){
        return view('website.sag');
    }

}
