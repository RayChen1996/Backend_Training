<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\History;
use App\Models\Reader;
use PDO;
/**
 * @OA\Info3(
 *     title="API Documentation",
 *     version="1.0.0",
 *     description="API documentation for your project"
 * )
 */
class HistoryController extends Controller
{
    public function index(){
        $history = History::limit(10)->get();
        // $history = Reader::get();
        // return $history;
        //  response()->json($history);

        return view('History\History')->with('HistoryData', $history);
    }

    public function show($id)
    {
        $history = History::find($id);
        if ($history) {
            return response()->json($history);
        } else {
            return response()->json(['error' => 'Record not found'], 404);
        }
    }



    public function GetList(){
        $history = History::limit(50)->get();

        // $users = User::leftJoin('CARDS', 'USERS.U_IDX', '=', 'CARDS.U_IDX')->count();
        // return $users;
      
        
        return response()->json($history);
    }

    public function GetHistoryList(Request $request, $ReaderIdx){
        $history = History::where('R_IDX', '=', $ReaderIdx)->limit(50)->get();

        // $users = User::leftJoin('CARDS', 'USERS.U_IDX', '=', 'CARDS.U_IDX')->count();
        // return $users;
      
        
        return response()->json($history);
    }

}
