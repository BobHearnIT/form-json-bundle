<?php

namespace BobHearnIT\FormJsonBundle\Serializer;

use BobHearnIT\FormJsonBundle\Configuration\FormConfiguration;

class RadioSerializer extends AbstractSerializer
{
    public function match(FormConfiguration $configuration): bool
    {
        dd($configuration->getFormView()->vars);
        foreach ($configuration->getFormView()->vars['block_prefixes'] as $blockPrefix) {
            if ('choice' === $blockPrefix) {
                return true;
            }
        }

        return false;
    }

    public function getConfigs(): array
    {
        return array_merge(parent::getConfigs(), ['choices']);
    }
}