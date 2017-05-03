<?php

namespace App\Http\Controllers;

use App\chart1;
use App\Http\Requests;
use Illuminate\Http\Request;
use Charts;

class ChartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
          // $chart = Charts::create('temp', 'canvas-gauges')
          //   ->title('Monitoring sensor suhu')
          //   // ->labels(['Suhu Ruangan', 'kelembaban Ruangan'])
          //   ->values([15,30])
          //   ->dimensions(600,0)
          //   ->height(300)
          //   ->width(0)
          //   ->responsive(false);

            // $chart = Charts::create('temp', 'canvas-gauges')
            //   ->title('Monitoring sensor suhu')
            //   ->labels('My nice label')
            //   ->values([15,30])
            //   ->dimensions(600,0)
            //   ->responsive(false);

            $chart = Charts::database(Chart1::all(),'bar', 'highcharts')
              ->height(300)
              ->width(0)
              ->responsive(false)
              ->groupByYear();

        return view('adminlte::home',['chart'=> $chart]);
    }
}
