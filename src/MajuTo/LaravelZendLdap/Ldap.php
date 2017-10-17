<?php

namespace MajuTo\LaravelZendLdap;

class Ldap extends \Zend\Ldap\Ldap
{

    public function __construct($options = null)
    {
        parent::__construct($options);
    }

}