<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function add_money(Request $request)
    {
        $user = auth()->user()->id;
        $request->validate([
            'money' => 'required|numeric|max:10000'
        ]);

        Wallet::create([
            'usermobile_id' => $user,
            'money' => $request->money,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'money added to the wallet successfuly',
        ], 200);
    }
}
