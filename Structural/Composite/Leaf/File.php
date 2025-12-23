<?php

namespace Structural\Composite\Leaf;

use Structural\Composite\Component\FileSystemComponent;

class File implements FileSystemComponent
{
    private int $size;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}
