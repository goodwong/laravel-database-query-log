<?php

namespace Goodwong\LaravelDatabaseQueryLog;

use DB;
use Log;
use Illuminate\Support\ServiceProvider;

class QueryLogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // log database query
        if (config('app.debug', false)) {
            $this->logDatabaseQuery();
        }
    }

    /**
     * log database query sql
     *
     * @return void
     */
    private function logDatabaseQuery()
    {
        DB::listen(function($query) {
            $cost = sprintf('%5.2fms', $query->time);
            Log::info(
                " -- time {$cost} -- + -- sql {$query->sql} -- + -- bindings",
                $query->bindings
            );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

