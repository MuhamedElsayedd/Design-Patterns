<?php

namespace Structural\Composite\Composite;

use Structural\Composite\Component\FileSystemComponent;

class Folder implements FileSystemComponent
{
    private array $children = [];

    public function add(FileSystemComponent $component): void
    {
        $this->children[] = $component;
    }

    public function getSize(): int
    {
        $total = 0;

        foreach ($this->children as $child) {
            $total += $child->getSize();
        }

        return $total;
    }
}
