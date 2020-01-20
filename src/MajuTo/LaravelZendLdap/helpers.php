<?php

use MajuTo\LaravelZendLdap\Ldap;

if (!function_exists('ldap')) {
    /**
     * @param string $config
     * @return Ldap
     * @throws Exception
     */
    function ldap($config = null)
    {
        if( ! file_exists(config_path('ldap.php')) ) {
            throw new Exception('ldap.php config file not found');
        }

        if ($config === null)
            $config = config('ldap.default');

        $config = config('ldap.' . $config);

        return (new Ldap($config))->bind();
    }
}