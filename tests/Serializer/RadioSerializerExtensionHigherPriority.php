<?php

namespace BobHearnIT\FormJsonBundle\Tests\Serializer;

use BobHearnIT\FormJsonBundle\Serializer\AbstractSerializerExtension;
use BobHearnIT\FormJsonBundle\Serializer\RadioSerializer;

class RadioSerializerExtensionHigherPriority extends AbstractSerializerExtension
{
    public function getParent(): string
    {
        return RadioSerializer::class;
    }

    public function getPriority(): int
    {
        return 1;
    }

    public function getChoices(): array
    {
        return [
            'foobar' => 'Foobar',
        ];
    }
}