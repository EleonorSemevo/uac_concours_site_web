<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\ActionController;
use App\Models\Actualite;
use DB;
use Validator;

class ChampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = actualite::all();
        return view('actualite', compact('actualites'));
    
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
       

        /*$champs = Champ::create($request->all());
        return response()->json($champs);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $champ = Champ::find($id);
        $basecontroller = new BaseController();
  
        if (is_null($champ)) {
            return $basecontroller->sendError('Champ not found.');
        }
   
        return $basecontroller->sendResponse(new ChampResource($champ), 'Champ retrieved successfully.');
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
       //$champ  = DB::table('champs')->where('id',$request->input('id'))->get();
        $champ = Champ::where('id', $id)
                        ->where('id',$id)
                        ->first();
        $input = $request->all();
        $basecontroller = new BaseController();
        $validator = Validator::make($input, [
            'superficie' => 'required',
            
        ]);
   
        if($validator->fails()){
            return $basecontroller->sendError('Validation Error.', $validator->errors());       
        }


        if($request->input('superficie')!=0.0)
        {
            $champ->superficie = $request->input('superficie');
        }

        if($request->input('longitude')!=0.0)
        {
            $champ->longitude = $request->input('longitude');
        }

        if($request->input('latitude')!=0.0)
        {
            $champ->latitude = $request->input('latitude');
        }

        if($request->input('quartier')!='')
        {
            $champ->quartier = $request->input('quartier');
        }

        if($request->input('ville')!='')
        {
            $champ->ville = $request->input('ville');
        }

        if($request->input('idProducteur')!=0)
        {
            $champ->idProducteur = $request->input('idProducteur');
        }
               
       $champ->save();
       return $basecontroller->sendResponse(new ChampResource($champ), 'Champ updated successfully.');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Champ::where('id', $id)->delete();
        return response()->json('Champ Removed successfully.');
    }
}
