<?php

function timeDiff($date)
{
    Carbon::setLocale('ms');
    return $date->diffForHumans();
}
