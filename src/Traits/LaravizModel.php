<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

namespace Vizrex\Laraviz\Traits;

use Closure;
/**
 * Description of LaravizModelTrait
 *
 * @author Zeshan
 */
trait LaravizModel
{
    protected static $logAttributes = ['*'];
    
    public function findByIdentifier($identifier, array $cols = ['*'], Closure $queryProcessor = null)
    {
        $query = self::where("id", $identifier);
        $queryProcessor === null || $queryProcessor($query);
        return $query->first($cols);
    }
}
