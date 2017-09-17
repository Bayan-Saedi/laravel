<?php


use App\Product;


Route::get('/{name}/{name2}', function ($name, $name2) {	
	
	// $products = Product::whereHas('academicBranches', function ($query) use ($name) {
	//     $query->where('name', $name);

	// })->with('academicBranches')->get();

	// dd($products);

	$products = Product::whereHas('academicBranches', function ($query) use ($name) {
	    $query->where('name', $name);

	})->whereHas('academicYears', function ($query) use ($name2) {
	    $query->where('name', $name2);
	})->get();

	dd($products);

});
