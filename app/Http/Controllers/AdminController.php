<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageRole()
    {
        return view('account_maintenance', [
                'accounts' => Account::all()
            ]
        );
    }

    public function updateRole(Account $account)
    {
        return view('update_role', [
            'account'=>$account


        ]);
    }




}
