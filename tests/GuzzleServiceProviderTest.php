<?php
/**
 * GuzzleServiceProviderTest.php
 */

namespace Cfralick\GuzzleHttp\Provider\Tests;

use Cfralick\GuzzleHttp\Provider\GuzzleServiceProvider;
use Silex\Application;

class GuzzleServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    const GUZZLE_CLIENT_CLASS = "\\GuzzleHttp\\Client";
    protected static $app;
    
    protected $provider;

    public static function setUpBeforeClass()
    {
        self::$app = new Application;
    }

    protected function setUp()
    {
        $this->provider = new GuzzleServiceProvider;
    }
    
    protected function tearDown()
    {
        $this->provider = null;
    }
    
    protected function assertPreconditions()
    {
        $this->assertFalse(isset(self::$app['guzzle.client']));
    }

    public function testRegister()
    {
        self::$app->register($this->provider);
        $this->assertInstanceOf(self::GUZZLE_CLIENT_CLASS, self::$app['guzzle.client']);
    } 
}
