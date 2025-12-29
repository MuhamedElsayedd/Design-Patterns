<?php

namespace Structural\Proxy\Proxy;

use Structural\Proxy\Subject\File;
use Structural\Proxy\RealSubject\RealFile;

class FileProxy implements File
{
    private ?RealFile $realFile = null;
    private string $fileName;
    private bool $hasAccess;

    public function __construct(string $fileName, bool $hasAccess)
    {
        $this->fileName  = $fileName;
        $this->hasAccess = $hasAccess;
    }

    public function download(): void
    {
        // Protection Proxy
        if (!$this->hasAccess) {
            echo "Access denied ❌" . PHP_EOL;
            return;
        }

        // Virtual Proxy (Lazy Loading)
        if ($this->realFile === null) {
            $this->realFile = new RealFile($this->fileName);
        }

        $this->realFile->download();
    }
}
