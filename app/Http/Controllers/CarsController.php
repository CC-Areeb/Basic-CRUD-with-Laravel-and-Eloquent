<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // there are ways to filter through our search results

        // this displays all the data available in the database
        // $cars = Car::all();


        // apply a condition to see 
        // $cars = Car::where('name', 'BMW')->get();

        // breaking or "chunking" large amounts of data
        // $cars = Car::chunk(2, function($cars){
        //     foreach ($cars as $car) {
        //         print_r($car);
        //     }
        // });


        // this is used to see if the item exists inside the database or not 
        // $cars = Car::where('name', 'BMW')->firstOrFail();


        // we can also perform actions like count to count the number of items 
        // this is used witht the where clause as well 
        // other methods include like sum() to add all the numbers
        // average() method to calculate the average of given numbers



        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 2 methods to insert records 

        //method 1 is by creating a new instance // $request->input('name attribute')

        // $car = new Car;
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // $car->save();

        // return redirect('/cars');





        // method 2 is by passing an array to a model

        $car = Car::create([
            // 'column name' => request(name attribute);

            'name' => request('name'),
            'founded' => request('founded'),
            'description' => request('description'),
        ]);

        return redirect('/cars');
        /*
        you can also use the make method instead of create but the create will method will
        automatically save data whereas the make method will not so we have to use $car->save() 
        to actually save it inside the database
        */

        // dd('Some text 😇'); -----> die dump method to see if you get an error or not
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
        $car = Car::where('id',$id)->first();        
        return view('cars.edit')->with('car', $car);
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
        $car = Car::where('id', $id)
                    ->update([
                    'name' => request('name'),
                    'founded' => request('founded'),
                    'description' => request('description'),
                ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $car = Car::find($id)->first();
    //     $car->delete();
    //     return redirect('/cars');
    // }

    /* 
    Another way is to directly pass the model and the variable inside the function itself 
    */

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars');
    }
}
