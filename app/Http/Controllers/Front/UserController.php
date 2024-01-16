<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Front\VerifiesEmails;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function showUserName(){
        return 'MMMMMM';
    }
    public function getIndex(){
     /*   $date=[];
    $data['id']= 1;
    $data['name']='zozo';
    return view( view: 'welcome',$data);*/

  // return view(view: 'layouts/welcome') -> with ('name','basma');
    $data=[   ];
    return view(view: 'layouts/welcome') -> with ('data',$data);
       }
    }

   //View

   

    
