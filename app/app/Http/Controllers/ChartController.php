<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function generatedata(Request $request)
    {
        $counter = 0;
        $filePath = '/Users/kaladakienka/Documents/My_Projects/Temper/app/export.csv';

        $userStepMap = array();
        foreach(file($filePath) as $line) {
            if ($counter == 0) {
                $counter++;
                continue;
            }

            $splitStr = explode(';', $line);

            if (empty($userStepMap[$splitStr[2]])) {
                if ($splitStr[2] == '') {
                    $userStepMap[0] = 1;
                } else {
                    $userStepMap[$splitStr[2]] = 1;
                }
            } else {
                $userStepMap[$splitStr[2]]++;
            }

            $counter++;
        }

        ksort($userStepMap);
        $keys = array_keys($userStepMap);
        $values = self::calculatePercentage(array_values($userStepMap), $counter);

        return view('/viewchart', [
            "xAxis" => $keys,
            "yAxis" => $values
        ]);
    }

    public function calculatePercentage($data, $total)
    {
        $response = array();
        foreach($data as $value) {
            $percentage = round($value / $total * 100);
            array_push($response, $percentage);
        }

        return $response;
    }
}
