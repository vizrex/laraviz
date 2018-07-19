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

function css($absolutePath)
{
    echo "<link rel='stylesheet' href='".$absolutePath."'>";
}

function public_css($relativePath)
{
    css(merge_url(public_url().'/css/', $relativePath));
}

function js($absolutePath)
{
    echo "<script type='text/javascript' src='".$absolutePath."'></script>";
}

function public_js($relativePath)
{
    js(merge_url(public_url().'/js/', $relativePath));
}