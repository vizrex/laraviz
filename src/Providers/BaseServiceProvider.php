<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

/**
 * Description of BaseServiceProvider
 *
 * @author Zeshan
 */

namespace Vizrex\Laraviz;

use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    public static function getNamespace()
    {
        return str_replace("\\", "_", __NAMESPACE__);
    }
}
