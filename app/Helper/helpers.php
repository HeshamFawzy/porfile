<?php

function getChunk($collection, $no)
{
    $parts = ceil($collection->count() / $no);
    $chunks = $collection->chunk($parts);
    return $chunks;
}
