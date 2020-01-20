<?php

return [
    'default' => 'ldap',

    'ldap' => [
        "host" => env('LDAP_HOST', "localhost"),
        "port" => env('LDAP_PORT', 389),
        "useSsl" => env('LDAP_USESSL', false),
        "username" => env('LDAP_USERNAME', "username"),
        "password" => env('LDAP_PASSWORD', "password"),
        "bindRequiresDn" => false,
        "baseDn" => env('LDAP_BASEDN', ""),
        "accountCanonicalForm" => null,
        "accountDomainName" => null,
        "accountDomainNameShort" => null,
        "accountFilterFormat" => null,
        "allowEmptyPassword" => false,
        "useStartTls" => false,
        "optReferrals" => false,
        "tryUsernameSplit" => true,
        "networkTimeout" => null
    ]
];