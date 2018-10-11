<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

return [
    /*
     * Default routes can be customized below.
     * You may wish to add roles or permissions middleware, change its alias or 
     * endpoint address.
     */
    
    "routes" => [
        "time" => [
            "endpoint" => "/time",  // Part of url
            "middleware" => null,   // Middleware
            "name" => "system.time" // Alias
        ],
        
        "info" => [
            "endpoint" => "/info",  // Part of url
            "middleware" => null,   // Middleware
            "name" => "system.info" // Alias
        ]
    ],
    
    /*
     * s() helper method will always use this file while calling __() method
     */
    "default_translations_file" => "strings"    
];