<?php

Date::setLocale('id');

function date_now()
{
    return Date::now();
}

function date_plus($date, $counter)
{
    return Date::parse("+$counter day");
}

function date_minus($date, $counter)
{
    return Date::parse("-$counter day");
}

function date_db($date)
{
    return Date::parse($date)->format('Y-m-d');
}

function date_human($date)
{
    if(! $date == '') {
        return Date::parse($date)->format('d F Y');
    }
}

function date_view($date)
{
    return Date::parse($date)->format('d-m-Y');
}

function date_difference($date)
{
    return Date::parse($date)->diffForHumans();
}

function time_now()
{
    return Date::parse(date_now())->format('H:i:s');
}

function time_db($time)
{
    return Date::parse($time)->format('H:i:s');
}

function time_format($time, string $format = 'default')
{
    $date = Date::parse($time);

    if($format !== 'default') {
        return $date->format($format);
    }

    return $date;
}

function datetime_db($date)
{
    return Date::parse($date)->format('Y-m-d H:i:s');
}

function datetime_human($date)
{
    return Date::parse($date)->format('d F Y H:i:s');
}
