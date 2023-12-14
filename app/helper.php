<?php

use App\Models\notices;
use App\Models\website_settings;
use Illuminate\Support\Facades\Cache;

function changeDateFormate($date, $date_format)
{
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}

function limit_text($text, $limit)
{
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}
function divide_file_name($id)
{
    $old_files_names = notices::find($id)->file_path;
    $old_files_names = unserialize($old_files_names);
    return $old_files_names;
}
function websiteSetting()
{
    return Cache::remember('website_settings', now()->addHours(24), function () {
        return website_settings::find(1) ?? '';
    });
}
