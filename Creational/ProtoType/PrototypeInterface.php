<?php

namespace Creational\ProtoType;

interface PrototypeInterface
{
    public function copy(): PrototypeInterface;
}
