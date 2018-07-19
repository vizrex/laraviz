<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

/*
 * Concatenate one or more strings. This function
 * can take any number of parameters.
 */
function str_concat(...$strings)
{
    return implode("", $strings);
}
