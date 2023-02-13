<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function user_list(Request $request)
    {
        $logo = "img/logo.png";
        $page_title = 'User List';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;

//        $data = User::orderBy('id', 'DESC')->paginate(5);
        $users = User::latest()->paginate(10);
        return view('usermanagement.users.userlist', compact('users', 'logo', 'page_title', 'page_description', 'action'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_user(User $user)
    {
        $logo = "img/logo.png";
        $page_title = 'Edit Users';
        $page_description = 'Some description for the page';

        $action = __FUNCTION__;


        return view('usermanagement.users.edit', compact('logo','page_title', 'page_description','action'), [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update_user(User $user, UpdateUserRequest $request)
    {
        $user->update($request->validated());
        $user->syncRoles($request->get('role'));
        return redirect()->route('usermanagement.users.userlist')
            ->withSuccess(__('User updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('usermanagement.users.userlist')
            ->withSuccess(__('User updated successfully.'));
    }
}
