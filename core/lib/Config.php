<?php
namespace Barebone;

use \Noodlehaus\Config as Loader;

class Config {

    /**
     * @var \Noodlehaus\Config
     */
    private static $instance = null;

    /**
     * Instantiate Loader
     *
     * @return \Noodlehaus\Config
     */
    public static function instance()
    {
        if (null === self::$instance) {
            if (!defined('APP_ROOT')) {
                $path = __DIR__ . '/../../app/config.json';
            } else {
                $path = APP_ROOT . 'config.json';
            }

            $loader = new Loader($path);

            self::$instance = $loader;
        }
        return self::$instance;
    }

    /**
     * Read configuration value
     *
     * @param string $key path
	 * @param mixed $default Default value if key is empty/not-found
     * @return mixed
     */
    public static function get($key = '', $default = null)
    {
		if (!self::has($key)) {
			return $default;
		}
        return self::instance()->get($key);
    }

    /**
     * Check if key path exists
     *
     * @param string $key path
     * @return boolean
     */
    public static function has($key = '')
    {
        return self::instance()->has($key);
    }

    /**
     * Read all configuration values
     *
     * @return mixed
     */
    public static function all()
    {
        return self::instance()->all();
    }
			
}