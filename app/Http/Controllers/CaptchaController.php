<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $hour_range = range('a', 'm');
        $hour_field = $hour_range[array_rand($hour_range)];

        $minute_range = range('m', 'z');
        $minute_field = $minute_range[array_rand($minute_range)];

        $rand = rand(8, 12);
        for ($i = 0; $i <= $rand; $i++) {
            $hour_field .= (rand(0, 1) == 0) ? $hour_range[array_rand($hour_range)] : rand(0, 9);
            $minute_field .= (rand(0, 1) == 0) ? $minute_range[array_rand($minute_range)] : rand(0, 9);
        }

        session(
            array(
                "captcha_hour_field" => $hour_field,
                "captcha_minute_field" => $minute_field
            )
        );

        return view('captcha.index');
    }

    public function check_captcha(Request $request)
    {
        $captcha_hour_field = session('captcha_hour_field', null);
        $captcha_minute_field = session('captcha_minute_field', null);

        if ($captcha_hour_field == NULL || $captcha_minute_field == NULL) {
            die('You did not complete the clock. Please try again.');
        }

        $hour_field = (int) $request->get($captcha_hour_field);;
        $minute_field = (int) $request->get($captcha_minute_field);;

        if ($hour_field < 10 && strlen($hour_field) == 1) {
            $hour_field = '0' . $hour_field;
        }
        if ($minute_field < 10 && strlen($minute_field) == 1) {
            $minute_field = '0' . $minute_field;
        }
        $answer = md5($hour_field . ':' . $minute_field);

        if (session('captcha')['clock'] != $answer) {
            die('You entered incorrect time. Please try again.');
        }

        echo 'passed';
    }
}
