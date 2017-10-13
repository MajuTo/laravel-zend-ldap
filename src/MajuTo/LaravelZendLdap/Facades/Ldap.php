<?php
namespace MajuTo\LaravelZendLdap\Facades;

use Illuminate\Support\Facades\Facade;

class Ldap extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'ldap';
    }

}