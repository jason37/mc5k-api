<?php

namespace App\Http\Controllers;

use App\Models\Capsule;
use Illuminate\Http\Request;
use Validator;

class CapsuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $capsules = Capsule::latest()->get();

        if (is_null($capsules->first())) {
            return response()->json([
                'status'  => 'failed',
                'message' => 'No capsules found',
            ], 200);
        }

        $response = [
            'status' => 'success',
            'message' => 'Here are your capsules',
            'data' => $capsules,
        ];

        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validate = Validator::make($request->all(), [
            'message' => 'required|string|max:250',
            'open_time' => 'required|date',
//             'is_opened' => 'required|boolean'
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation Error!',
                'data' => $validate->errors(),
            ], 403);
        }

				$request->request->add(['user_id' => auth()->id()]);

        $capsule = Capsule::create($request->all());

        $response = [
            'status' => 'success',
            'message' => 'Capsule added',
            'data' => $capsule,
        ];

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
   {
	   $capsule = Capsule::find($id);

	   if (is_null($capsule)) {
		   return response()->json([
			   'status' => 'failed',
			   'message' => 'capsule not found',
		   ], 200);
	   }

	   $response = [
		   'status' => 'success',
		   'message' => 'Capsule found',
		   'data' => $capsule,
	   ];

	   return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Capsule $capsule)
    {
      $validate = Validator::make($request->all(), [
	   'message' => 'required',

	 ]);

	 if($validate->fails()){
		 return response()->json([
			 'status' => 'failed',
			 'message' => 'Validation Error!',
			 'data' => $validate->errors(),
		 ], 403);
	 }

	 $capsule = Capsule::find($id);

	 if (is_null($capsule)) {
		 return response()->json([
			 'status' => 'failed',
			 'message' => 'Capsule not found',
		 ], 200);
	 }

	 $capsule->update($request->all());

	 $response = [
		 'status' => 'success',
		 'message' => 'Capsule updated',
		 'data' => $capsule,
	 ];

	 return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Capsule $capsule)
    {
        //
    }
}
