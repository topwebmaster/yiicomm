<?php
namespace common\models;
/**
 * Created by PhpStorm yiicomm.
 * User: topwebmasterblog@gmail.com 
 * Date: 15.11.14
 * Time: 20:11
 */


use yii\base\Model;

 class BusTarifForm extends Model
 {
    public $bus_route;
    public $bus_route_number;
    public $bus_license_plate;
    public $bus_model;
    public $bus_time_start;
    public $bus_time_end;
    public $bus_start_station;
    public $bus_stop_station;
    public $bus_route_stations;
    public $bus_route_markets;
    public $bus_route_hotels;
    public $bus_route_good_places;


 }