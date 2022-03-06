<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Role::all();
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
        $request->validate(
            ['name' => 'required']
        );
        try {
            $role=Role::create($request->all());
            return response()->json(["Role"=>$role], 200);
        }catch(QueryException $e){
            return response()->json(["Error"=>$e->getMessage()],400);
        }
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
        return Role::find($id);
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
        //update request
         $role=Role::find($id);
         if(is_null($role)){
            return response()->json(
                ['Error'=>"Role Not Found!",400]
            );

         }
        $role->update($request->all());
        $status=$role->save();
        if($status){
            return response()->json(['data'=>$role],200);
        }else{
            return response()->json(['Error'=>"Role Update Failed!"],400);
        }

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
        Role::where('role_id', $id)->delete();

    }
}
