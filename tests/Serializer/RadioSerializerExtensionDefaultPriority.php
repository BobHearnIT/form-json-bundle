<?php

namespace BobHearnIT\FormJsonBundle\Tests\Serializer;

use BobHearnIT\FormJsonBundle\Serializer\AbstractSerializerExtension;
use BobHearnIT\FormJsonBundle\Serializer\RadioSerializer;

class RadioSerializerExtensionDefaultPriority extends AbstractSerializerExtension
{
    public function getParent(): string
    {
        return RadioSerializer::class;
    }

    public function getChoices(): array
    {
        return [
            'needle' => 'Needle',
        ];
    }
}