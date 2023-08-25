<?php

class ProductTest extends TestCase
{
    public function testGetImageUrlReturnsValidUrl()
    {
        $fileName = 'product_1.png';
        $expectedUrl = 'https://example.com/images/' . $fileName;

        $fileStorageMock = $this->createMock(FileStorageInterface::class);
        $fileStorageMock->method('fileExists')->willReturn(true);
        $fileStorageMock->method('getUrl')->willReturn($expectedUrl);

        $product = new Product($fileStorageMock);
        $product->setImageFileName($fileName);

        $this->assertEquals($expectedUrl, $product->getImageUrl());
    }
}
