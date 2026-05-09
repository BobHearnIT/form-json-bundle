<?php

namespace BobHearnIT\FormJsonBundle\Serializer;

use BobHearnIT\FormJsonBundle\Configuration\FormConfiguration;

class FormSerializer extends AbstractSerializer
{
    public function match(FormConfiguration $configuration): bool
    {
        foreach ($configuration->getFormView()->vars['block_prefixes'] as $blockPrefix) {
            if ('form' === $blockPrefix) {
                return true;
            }
        }

        return false;
    }

    protected function getConfigs(): array
    {
        return array_merge($this->getMandatoryConfigs(), ['id', 'name']);
    }

    protected function getMandatoryConfigs(): array
    {
        return ['method', 'action'];
    }
}