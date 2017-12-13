<?php
define('YAR_VERSION', '1.2.5');
define('YAR_CLIENT_PROTOCOL_HTTP', 1);
define('YAR_PACKAGER_PHP', 'PHP');
define('YAR_PACKAGER_JSON', 'JSON');
define('YAR_ERR_OKEY', 0);
define('YAR_ERR_OUTPUT', 8);
define('YAR_ERR_TRANSPORT', 16);
define('YAR_ERR_REQUEST', 4);
define('YAR_ERR_PROTOCOL', 2);
define('YAR_ERR_PACKAGER', 64);
define('YAR_ERR_EXCEPTION', 64);
define('YAR_OPT_PERSISTENT', 2);

/**

 */
final class Yar_Client
{
    final public function __construct(string $url) { }

    /**
     * @return boolean
     */
    public function setOpt(number $name, mixed $value) { }

    public function __call(string $method, array $parameters) {
        return [];
    }
} 