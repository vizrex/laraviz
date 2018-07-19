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

Route::get('/time', "\\Vizrex\\Laraviz\\Http\\Controllers\\LaravizController@now")->name("system.time");
Route::get('/info', "\\Vizrex\\Laraviz\\Http\\Controllers\\LaravizController@phpInfo")->name("system.info");