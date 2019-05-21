<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\UserAdmin\UserStoreRequest;
use App\Http\Requests\UserAdmin\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class userAdminController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index.create-user');
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
    public function store(UserStoreRequest $request)
    {
        if ($request->hasFile('pic')) {
            $file = $request->file('pic');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path('/uploadImages/');
            $file->move($path, $fileName);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if (isset($fileName)):
            $user->photo = '/uploadImages/' . $fileName;
        endif;
        $user->password = bcrypt($request->input('password'));
        $user->save();

        $user->roles()->attach($request->input('role'));

        Session::flash('create', 'با موفقیت کاربر جدید ثبت شد');
        return redirect(route('show.user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $users = User::latest()->paginate(10);
        return view('admin.index.list-user', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.index.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if ($request->file('pic')) {
            if ($user->photo) {
                unlink(public_path($user->photo));
            }
            $file = $request->file('pic');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path('/uploadImages/');
            $file->move($path, $fileName);
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if (isset($fileName)):
            $user->photo = '/uploadImages/' . $fileName;
        endif;
        $user->password = bcrypt($request->input('password'));
        $user->status = $request->input('role');

        $user->save();
        Session::flash('edit', 'اطلاعات شما با موفقیت به روز رسانی شد.');
        return redirect(route('show.user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('delete', 'کاربر مورد نظر شما با موفقیت حذف گردید.');
        return back();
    }

    public function search(Request $request)
    {
        $search = $request['search'];
        $users = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')->paginate(5);
        return view('admin.user.searchPage', compact('users'));
    }
}
