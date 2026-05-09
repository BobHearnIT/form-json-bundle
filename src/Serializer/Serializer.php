<?php

namespace BobHearnIT\FormJsonBundle\Serializer;

use BobHearnIT\FormJsonBundle\Configuration\FormConfiguration;
use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;
use Symfony\Component\Form\FormInterface;

class Serializer
{
    protected array $serializers = [];

    public function __construct(
        #[AutowireIterator('form_json.serializer')]
        iterable $serializers,
        #[AutowireIterator('form_json.serializer_extension')]
        iterable $serializerExtensions,
    )
    {
        $this->buildSerializers(
            iterator_to_array($serializers),
            iterator_to_array($serializerExtensions)
        );
    }

    public function serialize(FormInterface $form): array
    {
        foreach ($this->getItems($form) as $config) {

        }
    }

    protected function buildSerializers(array $serializers, array $serializerExtensions): void
    {
        dd($serializers, $serializerExtensions);
        $this->serializers = [];
        foreach ($serializers as $serializer) {
            $this->serializers[] = new $serializer($serializerExtensions);
        }
    }

    protected function serializeGivenForm(FormInterface $form): array
    {
        $serialisation = [];

        return $serialisation;
    }

    protected function getItems($form): array
    {
        $configs = ['form' => new FormConfiguration($form)];

        if (!empty($form->all())) {
            $configs['children'] = $this->getItemConfiguration($form);
        }

        return $configs;
    }

    protected function getItemConfiguration(FormInterface $form): array
    {
        $children = [];
        foreach ($form->all() as $child) {
            if (!empty($child->all())) {
                $this->getItemConfiguration($child);
            } else {
                $children[] = new FormConfiguration($child);
            }
        }

        return $children;
    }
}