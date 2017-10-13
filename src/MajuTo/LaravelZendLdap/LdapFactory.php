<?php
namespace MajuTo\LaravelZendLdap;

use Zend\Ldap\Ldap;

class LdapFactory
{
	const CONFIG_FILE_NAME = 'ldap';

    /**
     * @param string|null $name
     * @return Ldap
     */
    public function getLdap($name = null)
    {
    	if ($name === null || !array_key_exists($name, config(self::CONFIG_FILE_NAME))) {
            $name = config($this->app['config'][self::CONFIG_FILE_NAME . '.default']);
        } else {
            $ldap = (new Ldap(config(self::CONFIG_FILE_NAME . '.' . $config)))->bind();
        }
        return $ldap;
    }

}