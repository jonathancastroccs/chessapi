<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Services\ModuleService;

class HomeController extends Controller
{

    protected $moduleService;


    public function __construct(ModuleService $moduleService){

      $this->moduleService = $moduleService;  

  }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $player_name = 'hiraku';

        $data = $this->moduleService->responseGetByPlayerName('/pub/player/',$player_name);

          print_r($data);

          exit;
       return view('home');
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
