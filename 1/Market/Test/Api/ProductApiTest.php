<?php

namespace Api;

class ProductApiTest extends WebTestCase
{
    public function testGetProductList()
    {
        $client = static::createClient();
        $client->request('GET', '/products');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $responseData = json_decode($client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('products', $responseData);
    }
}
