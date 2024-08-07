<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function barChart()
    {

        $dataPoints = array(
            array("x" => 10, "y" => 41),
            array("x" => 20, "y" => 35, "label" => "Lowest", "indexLabel" => "Lowest"),
            array("x" => 30, "y" => 50),
            array("x" => 40, "y" => 45),
            array("x" => 50, "y" => 52),
            array("x" => 60, "y" => 68),
            array("x" => 70, "y" => 38),
            array("x" => 80, "y" => 71, "label" => "Hightest", "indexLabel" => "Highest"),
            array("x" => 90, "y" => 52),
            array("x" => 100, "y" => 60),
            array("x" => 110, "y" => 36),
            array("x" => 120, "y" => 49),
            array("x" => 130, "y" => 41)
        );

        return view('welcome', compact('dataPoints'));
    }
}
