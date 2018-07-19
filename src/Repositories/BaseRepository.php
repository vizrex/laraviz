<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

namespace Vizrex\Laraviz\Repositories;


use Closure;

/**
 * Description of BaseRepository
 *
 * @author Zeshan
 */
class BaseRepository
{
    
    protected $model = null;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->model::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->model::create($request->all());
    }

    /**
     * Get the specified resource.
     *
     * @param  int  $identifier
     * @param  array $cols Columns to select
     * @params function $extraClauses Query will be passed to this closure
     * @return \Illuminate\Http\Response
     */
    public function find($identifier, array $cols = ['*'], Closure $queryProcessor = null)
    {
        return $this->model::findByIdentifier($identifier, $cols, $queryProcessor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $identifier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $identifier)
    {
        $model = $this->find($identifier);
        if($model !== null)
        {
            $model->fill($request->all());
            $model->save();
        }
        
        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $identifier
     * @return \Illuminate\Http\Response
     */
    public function destroy($identifier)
    {
        $model = $this->find($identifier);
        if($model !== null)
        {
            $model->delete();
        }
        
        return $model;
    }
}
