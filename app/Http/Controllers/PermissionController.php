<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UAC;
class PermissionController extends Controller
{
    public function index()
    {

        $UACList =  UAC::paginate(10);
        
        return view('Pages.UAC.Uac',['uacs'=>$UACList]);
    
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
