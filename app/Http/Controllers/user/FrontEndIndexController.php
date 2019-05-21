<?php

namespace App\Http\Controllers\user;

use App\Http\Requests\user\userLoginRequest;
use App\Http\Requests\user\userRegisterRequest;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FrontEndIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('users')->latest()->paginate(8);
        return view('user.index', compact('products'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function singlePage($id)
    {
        $product = Product::with('users')->whereId($id)->first();
//        return $product;
        return view('user.single', compact('product'));
    }

    public function loginRegister()
    {
        return view('user.login-registration');
    }

    public function register(userRegisterRequest $request, &$register = false)
    {
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->status = 3;
        $user->password = bcrypt($request['password']);
        $user->save();

        $register = true;
        $user->roles()->attach(3);

        Session::flash('createUser', '');
        return back($register);
    }

    public function login(userLoginRequest $request)
    {
        dd('s');
        $users = new User();

        Session::flash('loginUser', '');
    }
}
