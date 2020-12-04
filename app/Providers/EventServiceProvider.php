<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;

  
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Models\{Activity,Drivers,Cars, Addreses,ExitsCars, Routes, Stops, User};

use App\observers\{carsObserver, driversObserver, AddressObserver,ExistCarsObserver, RoutesObserver, StopsObserver, UserObserver };


use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;



class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
    
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Cars::observe(carsObserver::class);
        Drivers::observe(driversObserver::class);
        Addreses::observe(AddressObserver::class);
        /*ExitsCars::observe(ExistCarsObserver::class);
        */Routes::observe(RoutesObserver::class);

        Stops::observe(StopsObserver::class);
        User::observe(UserObserver::class);

    }
}
