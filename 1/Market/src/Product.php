<?php

namespace Market;

use Market\FileStorage\FileStorageInterface;

class Product
{
    /**
     * @var FileStorageInterface
     */
    private FileStorageInterface $storage;
    /**
     * @var string
     */
    private string $imageFileName;


    public function __construct(FileStorageInterface $storage)
    {
        $this->storage = $storage;
    }

    /*...*/
    /**
     * Returns product image URL. *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        if ($this->storage->fileExists($this->imageFileName) !== true) {
            return null;
        }
        return $this->storage->getUrl($this->imageFileName);
    }

    public function updateImage(): bool
    {
        /*...*/
        try {

            if ($this->storage->fileExists($this->imageFileName) !== true) {
                $this->storage->deleteFile($this->imageFileName);
            }
            $this->storage->saveFile($this->imageFileName);
        } catch (\Exception $exception) {
            /*...*/
            return false;
        }
        /*...*/
        return true;
    }
}
