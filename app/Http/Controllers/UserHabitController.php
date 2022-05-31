<?php

namespace App\Http\Controllers;

use App\Http\Resources\HabitResource;
use App\Http\Resources\UserHabitResource;
use App\Models\UserHabit;
use Illuminate\Http\Request;

class UserHabitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userHabits = QueryBuilder::for(UserHabit::class)
            ->allowedFilters(['name', 'email'])
            ->get();

        return UserHabitResource::collection($userHabits);
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
        $userHabit = UserHabit::create($request->all());

        return new UserHabitResource($userHabit);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserHabit  $userHabit
     * @return \Illuminate\Http\Response
     */
    public function show(UserHabit $userHabit)
    {
        return new UserHabitResource($userHabit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserHabit  $userHabit
     * @return \Illuminate\Http\Response
     */
    public function edit(UserHabit $userHabit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserHabit  $userHabit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserHabit $userHabit)
    {
        $userHabit->update($request->all());
        return new UserHabitResource($userHabit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserHabit  $userHabit
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserHabit $userHabit)
    {
        $userHabit->delete();
    }
}
