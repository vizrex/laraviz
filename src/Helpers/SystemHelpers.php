<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */
use Illuminate\Support\Facades\Log as Logger;

function v_echo($msg)
{
    if(defined("SYSTEM_ENV") && SYSTEM_ENV == "CONSOLE")
    {
        echo $msg.PHP_EOL;
    }
}

function v_info($msg)
{
    Logger::info($msg);
    v_echo($msg);
}

function v_debug($msg)
{
    Logger::debug($msg);
    v_echo($msg);
}

function v_error($msg)
{
    Logger::error($msg);
    v_echo($msg);
}