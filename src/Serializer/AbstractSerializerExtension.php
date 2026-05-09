<?php

namespace BobHearnIT\FormJsonBundle\Serializer;

use BobHearnIT\FormJsonBundle\Configuration\FormConfiguration;
use BobHearnIT\FormJsonBundle\Model\FormSerializerExtensionInterface;
use BobHearnIT\FormJsonBundle\Model\FormSerializerInterface;

class AbstractSerializerExtension implements FormSerializerExtensionInterface
{
    public function getParent(): string
    {
        throw new \RuntimeException('Not implemented');
    }

    public function getPriority(): int
    {
        return 0;
    }
}