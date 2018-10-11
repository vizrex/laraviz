<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

namespace Vizrex\Laraviz\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Description of LaravizController
 *
 * @author Zeshan
 */
class LaravizController extends BaseController
{
    public function now(Request $request)
    {
        $now = Carbon::now();
        
        if($request->has("format"))
        {
            $now = $now->format($request->input("format"));
        }
        
        return response()->json(
            [
                "timestamp" => $now,
                "timezone" => config("app.timezone")
            ]);
    }
    
    public function phpinfo(Request $request)
    {
        echo phpinfo();
    }
    
    
}
