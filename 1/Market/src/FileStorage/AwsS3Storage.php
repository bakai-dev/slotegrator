<?php

namespace Market\FileStorage;

use Market\AwsS3\Client\AwsStorageInterface;
use Exception;

class AwsS3Storage
{
    private AwsStorageInterface $awsStorage;

    public function __construct(AwsStorageInterface $awsStorage)
    {
        $this->awsStorage = $awsStorage;
    }

    public function getUrl(string $fileName): string
    {
        try {
            $url = $this->awsStorage->getUrl($fileName);
            return $url->__toString();
        } catch (Exception $exception) {
            // Обработка ошибок
        }
    }
}
