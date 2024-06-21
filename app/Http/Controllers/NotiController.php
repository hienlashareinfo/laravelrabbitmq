<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use SebastianBergmann\Invoker\Invoker;

class NotiController extends Controller
{
    public function index(){
        $list_users = User::all();
        Notification::send($list_users,new InvoicePaid('hehe'));
//        foreach ($list_users as $user)
//        {
//
//        }

    }
}
