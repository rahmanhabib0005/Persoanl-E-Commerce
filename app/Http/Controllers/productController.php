<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Tshirt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
    public function index(Request $request)
    {
        return view('payment');
    }

    public function cardView()
    {
        $user = User::with('cards')->find(Auth::user()->id);
        $data = $user->cards;

        return view('card.card')->with(['data' => $data]);
    }

    public function addCard($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'amount' => 'required',
            'product_id' => 'required',
        ]);

        $data = ['user_id' => $id, 'product_id' => $request->product_id, 'cardTitle' => $request->title, 'amount' => $request->amount];

        Card::create($data);
        if($data){
            return redirect()->back();
        }

    }

    public function edit($id,Request $request)
    {
        $is_available = Auth::user();
        if($is_available)
        {
            $product = Tshirt::find($id);
            $trans = compact('product');
            return view('edit')->with($trans);
        }
        else
        {
            return redirect()->back()->with('fail','You are not logged in!');
        }
    }

    public function update($id,Request $request)
    {
        $user = Tshirt::find($id);
        $mainfile = time()."-main.".$request->file('image')->getClientOriginalExtension();
        $main = $request->file('image')->storeAs('uploads',$mainfile,'public');
        Storage::disk('public')->put("uploads",$main);
        $user->product = $main;
        $user->pname = $request['name'];
        $user->amount = $request['amount'];
        $user->description = $request['description'];
        $done = $user->save();
        if($done)
        {
            return redirect('/')->with('success' ,'Update successfull.');
        }
        else
        {
            return redirect()->back()->with('fail','Something went wrong!');
        }
    }

    public function search(Request $request)  
    {
        $search = $request['search'] ?? '';
            if ($search) {
                $blaizers = Tshirt::where('category','LIKE', "%$search%")->orWhere('pname','LIKE', "%$search%")->get();
            }
            else
            {
                $blaizers = Tshirt::all();
            }
        $a_id = $request->session()->get('loginId');
        $data = User::find('1');
        $admin = $data->id;
        $trans = compact('blaizers','a_id','admin');
        return view('search')->with($trans);
    }
    
    public function payment($id,Request $request)
    {
        $is_available = Auth::user();
        if($is_available)
        {   
            $user = User::with('cards')->find(Auth::user()->id);
            $value = count($user->cards);
            $data = Tshirt::find($id);
            $trans = compact('data','value');
            
            return view('payment')->with($trans);
        }
        else
        {
            return redirect()->back()->with('fail','You are not logged in!');
        }
    }
    public function discount($id,Request $request)
    {
        $is_available = Auth::user();
        if($is_available)
        {
            $data = Tshirt::find($id);
            $trans = compact('data');
            return view('discount')->with($trans);
        }
        else
        {
            return redirect()->back()->with('fail','You are not logged in!');
        }
    }
    public function bkash(Request $request)
    {
        return view('bkash');
    }

    public function nagad(Request $request)
    {
        return view('nagad');
    }

    public function cash(Request $request)
    {
        return view('cash');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp',
            'red' => 'image|mimes:jpeg,jpg,png',
            'blue' => 'image|mimes:jpeg,jpg,png',
            'black' => 'image|mimes:jpeg,jpg,png',
            'white' => 'image|mimes:jpeg,jpg,png',
        ]);

        
        $user = new Tshirt;
        $mainfile = time()."-main.".$request->file('image')->getClientOriginalExtension();
        $main = $request->file('image')->storeAs('uploads',$mainfile,'public');
        // dd($mainfile);
        Storage::disk('public')->put("payment/uploads/",$main);
        $user->product = $main;
        $user->pname = $request['name'];
        $user->amount = $request['amount'];
        $user->category = $request['category'];
        $user->description = $request['description'];

        if ($request->file('red')) {
            $redfile = time()."-main.".$request->file('red')->getClientOriginalExtension();
            $red = $request->file('red')->storeAs('uploads',$redfile,'public');
            $user->product = $red;
        }
        

        if ($request->file('blue')) {
            $bluefile = time()."-main.".$request->file('blue')->getClientOriginalExtension();
            $blue = $request->file('blue')->storeAs('uploads',$bluefile,'public');
            $user->product = $blue;
        }

        if ($request->file('black')) {
            $blackfile = time()."-main.".$request->file('black')->getClientOriginalExtension();
            $black = $request->file('black')->storeAs('uploads',$blackfile,'public');
            $user->product = $black;
        }

        if ($request->file('red')) {
            $whitefile = time()."-main.".$request->file('white')->getClientOriginalExtension();
            $white = $request->file('white')->storeAs('uploads',$whitefile,'public');
            $user->product = $white;
        }

        $done = $user->save();

        if($done)
        {
            return redirect('/')->with('success' ,'Upload successfull.');
        }
        else
        {
            return redirect()->back()->with('fail','Something went wrong!');
        }
    }

    public function delete($id,Request $request) {
        if ($id == null){
            return redirect()->back();
        }
        else{
            Tshirt::find($id)->delete();
            return redirect()->back()->with('success',"Delete $id successfully.");
        } 
    }
    
}
