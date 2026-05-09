<?php

namespace BobHearnIT\FormJsonBundle\Model;

interface FormSerializerExtensionInterface
{
    /**
     * Return the FormSerializer, which will be overridden.
     *
     * @return string
     */
    public function getParent(): string;

    /**
     * Returns the priority of the extension. Higher priority means it will be this extension that will be executed.
     *
     * @return int
     */
    public function getPriority(): int;
}