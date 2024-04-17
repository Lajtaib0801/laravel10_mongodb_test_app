<?php

namespace App\Http\Controllers;

use App\Models\MongoDbTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mongodb\Laravel\Eloquent\Model;

class MongoDbTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $connection = DB::connection('mongodb');
        $msg = 'Mongodb is accessible!';
        try {
            $connection->command(['ping' => 1]);
        } catch (\Exception $ex) {
            $msg = 'Mongodb is not accessible!';
        }
        return ['msg' => $msg];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MongoDbTest $mongoDbTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MongoDbTest $mongoDbTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MongoDbTest $mongoDbTest)
    {
        //
    }
}
