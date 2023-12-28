<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;


class AccountController extends Controller
{

    public function add()
    {
        $url = url('/api/account/add');
        $account = new Account();
        $data = compact('url', 'account');
        return view('add_account')->with($data);
    }

    public function store(Request $request)
    {
        $account = new Account();
        $account->name = $request['name'];
        $account->balance = $request['balance'];
        $account->cvv = $request['cvv'];
        $account->number = $request['number'];
        $account->save();

        return redirect('/account/view');
    }


    public function view()
    {
        $accounts = Account::all();
        $data = compact('accounts');
        return view('view_accounts')->with($data);
    }

    public function delete(Account $account){
        if(!is_null($account)){
            $account->delete();
        }
        return redirect(route('account.view'));
    }

    public function edit($id){
        $account = Account::find($id);
        if(is_null($account)){
            return redirect(route('account.view'));
        }else{
            $url = url('/api/account/update').'/'.$id;
            $data = compact('account', 'url');
            return view('add_account')->with($data);
        }
    }

    public function update($id, Request $request){
        $account = Account::find($id);
        $account->name = $request['name'];
        $account->balance = $request['balance'];
        $account->cvv = $request['cvv'];
        $account->number = $request['number'];
        $account->save();
        return redirect(route('account.view'));
    }

    public function update_status($id, $status){
        $account = Account::find($id);
        $account->status = $status;
        $account->save();
        return redirect(route('account.view'));
    }
}
