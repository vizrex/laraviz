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
     */
    public function index()
    {
        return $this->model::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $attributes)
    {
        return $this->model::create($attributes);
    }

    /**
     * Get the specified resource.
     *
     * @param  int  $identifier
     * @param  array $cols Columns to select
     * @params function $extraClauses Query will be passed to this closure
     */
    public function find($identifier, array $cols = ['*'], Closure $queryProcessor = null)
    {
        return $this->model->findByIdentifier($identifier, $cols, $queryProcessor);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update($identifier, array $attributes)
    {
        $model = $this->find($identifier);
        if($model !== null)
        {
            $model->fill($attributes);
            $model->save();
        }
        
        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $identifier
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
