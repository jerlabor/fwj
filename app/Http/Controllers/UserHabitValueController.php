<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserHabitValueResource;
use App\Models\UserHabitValue;
use Illuminate\Http\Request;

class UserHabitValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userHabitValues = QueryBuilder::for(User::class)
            ->allowedFilters(['name', 'email'])
            ->get();

        return UserHabitValueResource::collection($userHabitValues);
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
       $userHabitValue = UserHabitValue::create($request->all());

        return new UserHabitValueResource($userHabitValue);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserHabitValue  $userHabitValue
     * @return \Illuminate\Http\Response
     */
    public function show(UserHabitValue $userHabitValue)
    {
        return new UserHabitValueResource($userHabitValue);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserHabitValue  $userHabitValue
     * @return \Illuminate\Http\Response
     */
    public function edit(UserHabitValue $userHabitValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserHabitValue  $userHabitValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserHabitValue $userHabitValue)
    {
        $userHabitValue->update($request->all());
        return new UserHabitValueResource($userHabitValue);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserHabitValue  $userHabitValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserHabitValue $userHabitValue)
    {
        $userHabitValue->delete();
    }
}
