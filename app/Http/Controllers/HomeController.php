<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Charts;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
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
          $chart = Charts::create('temp', 'canvas-gauges')
            ->title('Monitoring suhu Ruangan')
            ->labels(['Suhu Ruangan', 'kelembaban Ruangan'])
            ->values([15,30])
            ->dimensions(600,0)
            ->height(300)
            ->width(0)
            ->responsive(false);

          $chart2 = Charts::create('area', 'highcharts')
            ->title('Monitoring Kelembaban Ruangan')
            ->labels(['Suhu Ruangan', 'kelembaban Ruangan'])
            ->values([15,30])
            ->dimensions(600,0)
            ->height(300)
            ->width(0)
            ->responsive(false);

            // $chart = Charts::create('temp', 'canvas-gauges')
            //   ->title('Monitoring sensor suhu')
            //   ->labels('My nice label')
            //   ->values([15,30])
            //   ->dimensions(600,0)
            //   ->responsive(false);

            $chart3 = Charts::database(User::all(),'bar', 'highcharts')
              ->title('Kelembaban Tanah')
              ->height(300)
              ->width(0)
              ->responsive(false)
              ->groupByYear();

              // $chart2 = Charts::database(User::all(),'bar', 'highcharts')
              //   ->height(300)
              //   ->width(0)
              //   ->responsive(false)
              //   ->groupByYear();

        return view('adminlte::home',[
          'chart'=> $chart,
          'chart2'=> $chart2,
          'chart3'=> $chart3
        ]);
    }
}
