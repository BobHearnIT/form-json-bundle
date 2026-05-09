<?php

namespace BobHearnIT\FormJsonBundle\Serializer;

use BobHearnIT\FormJsonBundle\Configuration\FormConfiguration;
use BobHearnIT\FormJsonBundle\Model\FormSerializerInterface;

class AbstractSerializer implements FormSerializerInterface
{
    public function match(FormConfiguration $configuration): bool
    {
        throw new \RuntimeException('Not implemented');
    }

    public function serialize(FormConfiguration $configuration): array
    {
        throw new \RuntimeException('Not implemented');
    }

    protected function getMandatoryConfigs(): array
    {
        return ['name', 'type', 'required', 'disabled', 'value'];
    }

    protected function getConfigs(): array
    {
        return ['id', 'name', 'type', 'required', 'disabled', 'value'];
    }
}