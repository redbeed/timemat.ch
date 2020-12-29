<?php


namespace App\Http\Controllers;


use Carbon\Carbon;

class HomeController extends Controller
{

    public function __invoke(
        string $timezone,
        string $date,
        string $time,
        string $eventName = '',
        string $eventOwner = ''
    )
    {
        $timezone = str_replace('-', '/', $timezone);
        $timeString = $this->parseTime($timezone, $date, $time);


        return view('timer', [
            'timeString' => $timeString,
            'timezoneString' => $timezone,
            'eventName' => $eventName,
            'eventOwner' => $eventOwner,
        ]);
    }

    private function parseTime(
        string $timezone,
        string $date,
        string $time
    ): ?string
    {
        if (empty($timezone) || empty($date) || empty($time)) {
            return null;
        }

        $timeSegments = explode('-', $time);
        $hour = $minutes = $seconds = 0;

        if (count($timeSegments) === 2) {
            [$hour, $minutes] = $timeSegments;
        }

        if (count($timeSegments) === 3) {
            [$hour, $minutes, $seconds] = $timeSegments;
        }

        return Carbon::parseFromLocale($date, null, $timezone)
            ->setTime($hour, $minutes, $seconds)
            ->toIso8601String();
    }

}
