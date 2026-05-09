<?php

namespace BobHearnIT\FormJsonBundle\Serializer;

use BobHearnIT\FormJsonBundle\Configuration\FormConfiguration;

class TextSerializer extends AbstractSerializer
{
    public function match(FormConfiguration $configuration): bool
    {
        foreach ($configuration->getFormView()->vars['block_prefixes'] as $blockPrefix) {
            if ('text' === $blockPrefix) {
                return true;
            }
        }

        return false;
    }

    public function getConfigs(): array
    {
        return ['type', 'required', 'disabled'];
    }
}