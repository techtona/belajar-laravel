<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mahasiswa;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
    	//Query Builder
    	$mahasiswa = DB::table('tbl_mahasiswa')->get();

    	// dd($mahasiswa);

    	//Eloquent
    	// $mahasiswa = Mahasiswa::all();

    	// return view('mahasiswa', compact('mahasiswa'));
    	
    	$data['mahasiswa'] = Mahasiswa::all();

    	dd($data);

    	return view('mahasiswa', $data);
    }


    function customer(){
    	$data['customer'] = Customer::limit(10)->get();

    	//explore variable with dd();
    	// dd($data['customer']);

    	return view('customer',$data);
    }
}
