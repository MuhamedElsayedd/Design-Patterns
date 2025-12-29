<?php

namespace Structural\Proxy\RealSubject;

use Structural\Proxy\Subject\File;

class RealFile implements File
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk();
    }

    private function loadFromDisk(): void
    {
        echo "Loading {$this->fileName} from disk..." . PHP_EOL;
    }

    public function download(): void
    {
        echo "Downloading {$this->fileName}" . PHP_EOL;
    }
}
