<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dep;
/**
 * @OA\Info22(
 *     title="API Documentation",
 *     version="1.0.0",
 *     description="API documentation for your project"
 * )
 */
class DepController extends Controller
{
   
    public function index()
    {
        //
      
        $Dep =  Dep::paginate(10);
        // return response()->json($data);
     
        return view("Pages.Dep.ShowDep",[

            "deps"=>$Dep
        ]);
    }

    public function showDep()
    {
        //
   

        $deps = Dep::select('*')->get();
    
        return response()->json($deps);
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
        $data = [
            "D_NAME"=>$request->input('name'),
            "D_NOTE"=>$request->input('note')
        ];
        $Dep = Dep::create($data);
        
        // $dep = new Dep();
        // $dep->D_DEPNO = $request->input('depno');
        // $dep->D_NAME = $request->input('name');
        // $dep->D_NOTE = $request->input('note');
        // $dep->save();
    
        // // Redirect or return a response as needed
        // $insertedId = $dep->id;
        return redirect()->route('dep.index');


    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
