<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Models\User;
/**
 * @OA\Info45(
 *     title="API Documentation",
 *     version="1.0.0",
 *     description="API documentation for your project"
 * )
 */
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $UserList =  User::paginate(100);
        
        return view('Pages.Users.Users',['users'=>$UserList]);
    
    }



    public function AllList()
    {
        //

    }

    public function AllUserCount()
    {
        //
        $users = User::all()->count();

        // $users = User::leftJoin('CARDS', 'USERS.U_IDX', '=', 'CARDS.U_IDX')->count();
        // return $users;
        $response = [
            'usercount' => $users 
        ];
        
        return response()->json($response);
        
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
        //
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
