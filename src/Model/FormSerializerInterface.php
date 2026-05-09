<?php

namespace BobHearnIT\FormJsonBundle\Model;

use BobHearnIT\FormJsonBundle\Configuration\FormConfiguration;

interface FormSerializerInterface
{
    /**
     * Verify if the serializer can be used for the given configuration.
     *
     * @param FormConfiguration $configuration
     * @return bool
     */
    public function match(FormConfiguration $configuration): bool;
}