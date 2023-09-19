<?php

namespace App\Http\Controllers;

use App\Models\Tshirt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function default(Request $request)
    {
        $is_available = Auth::user();
        if($is_available)
        {

            $alls = Tshirt::where('category','Watch')->first();
            $watch = $alls->category;
            $watches = Tshirt::where('category','Watch')->limit(6)->get();
            $tshirts = Tshirt::where('category','T-shirt')->offset(0)->limit(3)->get();
            $blaizers = Tshirt::where('category','Blaizer')->limit(6)->get();
            $all = Tshirt::where('category','Blaizer')->first();
            $name = $all->category;

            $a_id = Auth::user()->id;
            $data = User::find('1');
            $admin = $data->id;
            $offer = Tshirt::find('1');

            $user1 = User::find('1');
            $user2 = User::find('1');
            $trans = compact('admin','a_id','tshirts','offer','blaizers','name','watch','watches','data','user1','user2');
            return view('index')->with($trans);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $is_available = Auth::user();
        if($is_available)
        {
            return redirect()->back()->with('fail', 'Already Logged in!');
        }else{
            return view('login');
        }
    }

    public function signup()
    {
        return view('signup');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        
        $user = new User;
        $filename = time()."-s.".$request->file('image')->getClientOriginalExtension();
        $file = $request->file('image')->storeAs('uploads',$filename,'public');
        $user->image = $file;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();


        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('/')->with('success' ,'Signup successfull.');
        }
        else
        {
            return redirect('login')->with('success' ,'Signup successfull.Now you can log in');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

            if(Auth::attempt($request->only('email','password')))
            {
                // $request->session()->put('loginId',$user->si);
                return redirect('/')->with('success','Login Successfully');
            }
            else
            {
                return redirect()->back()->with('fail', "Password Didn't maches");
            }
        }
    

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {

    }

    public function logout(Request $request)
    {
        $is_available = Auth::user();
        if($is_available)
        {
            // $request->session()->flush();
            Auth::logout();
            return redirect()->back()->with('success', "Logout Successfully");
        }
        else
        {
            return redirect()->back()->with('fail', "Already Logged Out");
        }
        
    }
}
