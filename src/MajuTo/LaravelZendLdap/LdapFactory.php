<?php
namespace MajuTo\LaravelZendLdap;

class LdapFactory
{
	const CONFIG_FILE_NAME = 'ldap';

    /**
     * @param string|array|null $options name of ldap configuration in config file or configuration array
     * @return \MajuTo\LaravelZendLdap\Ldap
     * @throws \Exception
     */
    public function getLdap($options = null)
    {
        if ($options === null ) {
            $options = config(self::CONFIG_FILE_NAME . '.default');
            $options = config(self::CONFIG_FILE_NAME . '.' . $options);
        } elseif ( $options !== null && !is_array($options) && !array_key_exists($options, config(self::CONFIG_FILE_NAME)) ) {
            throw new \Exception('"' . $options . '" parameter given in getLdap() method does not exist in config/ldap.php');
        } elseif (!is_array($options)) {
            $options = config(self::CONFIG_FILE_NAME . '.' . $options);
        }

        $ldap = new Ldap($options);
        $ldap->bind();

        return $ldap;
    }

}