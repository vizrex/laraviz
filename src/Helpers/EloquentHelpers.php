<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

/*
 * Given an associative array and a model,
 * extract only fillables of model from array
 */

function get_fillables($model, $associativeArray)
{
    return array_only($associativeArray, (new $model())->getFillable());
}