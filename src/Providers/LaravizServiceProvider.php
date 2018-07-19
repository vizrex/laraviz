<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

/**
 * Description of LaravizServiceProvider
 *
 * @author Zeshan
 */

namespace Vizrex\Laraviz;

use Vizrex\Laraviz\BaseServiceProvider;

class LaravizServiceProvider extends BaseServiceProvider
{
    public function register(){}
    
    public function boot()
    {
        $dir = __DIR__.'/../';
        
        // Routes
        require $dir.'routes/web.php';
        
        // Load Routes
        $this->loadRoutesFrom($dir.'routes/web.php');
        
        // Load Migrations
        $this->loadMigrationsFrom($dir.'database/migrations');
        
        // Configuration Files
        $this->mergeConfigFrom($dir.'config/laraviz.php', 'laraviz');
    }
}
