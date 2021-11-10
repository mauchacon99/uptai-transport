<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Addreses, States, Cars, Employee, Routes, Drivers, carsExits};

class PDFcontroller extends Controller
{
     public function index($collection)
     {
         
          switch ($collection) {
               case 'address':
                    $data  = Addreses::all();
                    $route = 'address.file';
                    $collection = " Direcciones";
               break;
               case 'cars':
                    $data  = Cars::all();
                    $route = 'cars.file';
                    $collection = " Carros";
               break;
               case 'employees':
                    $data  = Employee::all();
                    $route = 'employees.file';
                    $collection = " Personal Obrero";
               break;
               case 'routes':
                    $data  = Routes::all();
                    $route = 'routes.file';
                    $collection = " Rutas";
               break;
               case 'carsExits':
                    $data  = carsExits::all();
                    $route = 'carsExits.file';
                    $collection = " Salida de Vehiculos";
               break;
               case 'exit-cars-file':
                    $data  = carsExits::all();
                    $route = 'carsExits.file';
                    $collection = " Salida de Vehiculos";
               break;
          }

          
          $pdf = \PDF::loadView($route, compact('data', 'collection'));
          return $pdf->stream($collection.'.pdf');
     }

     public function detailsColletions($id, $action)
     {    
          try {
               switch ($action) {
                    case 'route-drivers-file':
                         $collection = Drivers::where('id', $id)->get()->last();
                         $data = [
                              'exits'  =>  $collection->CarsExits,
                              'driver' =>  $collection
                          ];
                         $route = 'drivers.'. $action;
                    break;
                    case 'route-drivers-cars-file':
                         $collection = Drivers::where('id', $id)->get()->last();
                         $data = [
                              'exits'  =>  $collection->CarsExits,
                              'driver' =>  $collection
                          ];
                         $route = 'drivers.'. $action;
                    break;
                    case 'exit-cars-file' || 'drivers-cars-file':
                         $collection = Cars::where('id', $id)->get()->last();
                         $data = [
                              'exits'=> $collection->Exits,
                              'cars' => $collection
                         ];
                         $route = 'cars.'. $action;
                    break;
               }
               $pdf = \PDF::loadView($route, $data);
               return $pdf->stream($action.'.pdf');
               
          } catch (\Throwable $th) {
               throw $th;
          }
          
     }
}
