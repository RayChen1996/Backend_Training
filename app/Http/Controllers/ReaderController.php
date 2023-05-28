<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Reader;
class ReaderController extends Controller
{
    //
    public function endpoint()
    {
        $data = ['message' => 'Hello, world!'];
        return response()->json($data);

        
    }


    public function index(){
        $ReaderList =  Reader::paginate(10);
        return view("Reader.index",['readers'=>$ReaderList]);
    }

    public function getBlobData($id)
    {
        // $query = "SELECT R_PARAMETER FROM READER WHERE R_IDX = :id";
        
        // $result = DB::select($query, ['id' => $id]);
        $document = Reader::find($id);

        
        if ($document) {
            $blobColumn  = $document->R_PARAMETER;
            
            // Process the retrieved Blob data as needed
            if ($blobColumn) {
                // $blobData = $blobColumn->getContent();
        
                // Convert JSON string to JSON format
                // $data = json_decode($blobData);

                if (mb_check_encoding($blobColumn, 'UTF-8')) {
                    // Data is valid UTF-8 encoded
                    // Proceed with processing
                } else {
                    // Convert the encoding to UTF-8 if needed
                    $blobColumn = mb_convert_encoding($blobColumn, 'UTF-8', 'ISO-8859-1');
                }

                $blob_data = ibase_blob_info($blobColumn);
                $blob_hndl = ibase_blob_open($blobColumn);
                $JSON_Text = ibase_blob_get( $blob_hndl, $blob_data[0]);
                ibase_blob_close($blob_hndl);
                $TimeZoneName = json_decode( $JSON_Text );
            

        
                // Return JSON response to the frontend
                return json_encode($TimeZoneName);
                // return response()->json($blobColumn);
                // return response()->json($data);
            } else {
                // Handle the case when the blob_column is null
                return response()->json(['error' => 'Blob column is null']);
            }
            // return response()->json($blobData);
        }
        
        return response()->json('Blob data not found', 404);
    }


    

}
