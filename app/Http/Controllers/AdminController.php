<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function manageRole()
    {
        return view(
            'account_maintenance',
            [
                'accounts' => Account::all()
            ]
        );
    }

    public function updateRole(Account $account)
    {
        return view('update_role', [
            'account' => $account,
            'roles' => Role::all()
        ]);
    }

    public function updateRoleValidity(Account $account, Request $req)
    {
        // dd($account);
        $account->role_id = $req->newRole;
        if ($account->save()) {
            return response()->json([
                'status' => 200,
                'message' => "Register Successfully"
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => "Kamu Telah Gagal"
        ]);
    }

    public function deleteAccount(Account $account){
        // dd($account);
        $account->delete();
        return redirect()->back();
    }
}
