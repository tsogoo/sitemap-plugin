<?php

namespace Tests\SitemapPlugin\Controller;

use Lakion\ApiTestCase\ApiTestCase;
use Lakion\ApiTestCase\XmlApiTestCase;

/**
 * Class AbstractTestController
 * @package Tests\SitemapPlugin\Controller
 */
abstract class AbstractTestController extends XmlApiTestCase
{
    /**
     * @before
     */
    public function setUpClient()
    {
        $this->client = static::createClient(array(), array());
    }
}