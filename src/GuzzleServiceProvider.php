<?php
/**
 * GuzzleServiceProvider.php
 */

namespace Cfralick\GuzzleHttp\Provider;
use Silex\ServiceProviderInterface;
use Silex\Application;

use GuzzleHttp\Client;

class GuzzleServiceProvider implements ServiceProviderInterface
{

    public function register(Application $app)
    {
        $app['guzzle.client'] = function() use ($app) {
            return new Client;
        };
    }

    public function boot(Application $app)
    {
    }    
}
