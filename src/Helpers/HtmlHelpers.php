<?php

/*
 *  Copyright © All Rights Reserved by Vizrex (Private) Limited 
 *  Usage or redistribution of this code is strictly prohibited
 *  without written consent of Vizrex (Private) Limited.
 *  Queries are welcomed at copyright@vizrex.com
 */

/**
 * Description of HtmlHelpers
 *
 * @author Zeshan
 */

function public_url()
{
    return url('/public');
}

function css($absolutePathOrArray)
{
    if(is_array($absolutePathOrArray))
    {
        foreach($absolutePathOrArray as $entry)
        {
            is_array($entry) && $entry[0] ? css($entry[0]) : css($entry);
        }
    }
    else
    {
        echo "<link rel='stylesheet' href='".$absolutePathOrArray."'>";
    }
}

function public_css($relativePath)
{
    css(merge_url(public_url().'/css/', $relativePath));
}

function js($absolutePathOrArray)
{
    if(is_array($absolutePathOrArray))
    {
        foreach($absolutePathOrArray as $entry)
        {
            is_array($entry) && $entry[0] ? js($entry[0]) : js($entry);
        }
    }
    else
    {
        echo "<script type='text/javascript' src='".$absolutePathOrArray."'></script>";
    }
}

function public_js($relativePath)
{
    js(merge_url(public_url().'/js/', $relativePath));
}