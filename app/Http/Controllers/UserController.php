<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user =User::find($id);

        return response()->view('users.show', compact('user'));
    }


       /**
     * Form the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function append_comment(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'password' =>'required',
            'comments' =>'required',
        ]);

        // $creds = $request->only(['name', 'password']);

        $user= User::where('name', request('name'))->get();
    
        if(count($user) == 0){
            return response()->json(['error' => 'Incorrect Name/Password'],401); 
        }
        if($user[0]->password == request('password'))
        {
            // $user->update(['comments' => ''.$user[0]->comments . ' ' . request('comments')]);
            $user[0]->comments = ''.$user[0]->comments . ' ' . request('comments');

            $user[0]->save();
            return response()->json([
                "status" =>true,
                'user'=> $user,
                ]);
        }
        else if($user[0]->password != request('password')) {
            return response()->json(['error' => 'Incorrect Name/Password'],401);
        }

       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
