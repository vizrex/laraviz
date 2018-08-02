<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

/**
 * Description of web
 *
 * @author Zeshan
 */

Route::get(config("laraviz.routes.time.endpoint", "/time"), "\\Vizrex\\Laraviz\\Http\\Controllers\\LaravizController@now")
    ->name(config("laraviz.routes.time.name"))
    ->middleware(config("laraviz.routes.time.middleware", null));

Route::get(config("laraviz.routes.info.endpoint", "/info"), "\\Vizrex\\Laraviz\\Http\\Controllers\\LaravizController@phpInfo")
    ->name(config("laraviz.routes.info.name", "system.info"))
    ->middleware(config("laraviz.routes.info.middleware", null));