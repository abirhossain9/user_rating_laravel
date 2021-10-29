<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $rating = new Rating();
        if(!empty($request->product_rating)){
        $rating->user_id =  $request->user_id;
        $rating->service_id = $request->service_id;
        $rating->stars_rated = $request->product_rating;
        $rating->save();
        return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('dashboard');
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
    public function avgRating(Request $request)
{

    //$rating = new Rating();
    $service_id = $request->service_id;
    $num_of_ratings= Rating::orderBy('id','asc')->where('service_id',$service_id)->get();
    //echo $service_id;
    //dd($num_of_ratings);
    $avg= 0;
    // for($i=0; $i<count($num_of_ratings);$i++){
    //     $avg=$avg+
    // }
    if(count($num_of_ratings)>0){
        foreach ($num_of_ratings as $num_of_stars) {
        $avg= $avg+ $num_of_stars->stars_rated;

    }
    echo "average rating is ". $avg/count($num_of_ratings);
    }
    else{
        echo "no ratings done yet";
    }


}

}
