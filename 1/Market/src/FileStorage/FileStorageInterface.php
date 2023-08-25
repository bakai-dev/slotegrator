<?php

namespace Market\FileStorage;

interface FileStorageInterface
{
    public function getUrl(string $fileName): string;

    public function fileExists(string $fileName): bool;

    public function deleteFile(string $fileName): void;

    public function saveFile(string $fileName): void;
}
