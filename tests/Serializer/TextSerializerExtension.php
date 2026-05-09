<?php

namespace BobHearnIT\FormJsonBundle\Tests\Serializer;

use BobHearnIT\FormJsonBundle\Serializer\AbstractSerializerExtension;
use BobHearnIT\FormJsonBundle\Serializer\TextSerializer;

class TextSerializerExtension extends AbstractSerializerExtension
{
    public function getParent(): string
    {
        return TextSerializer::class;
    }

    public function getType(): string
    {
        return 'text-from-tu';
    }
}