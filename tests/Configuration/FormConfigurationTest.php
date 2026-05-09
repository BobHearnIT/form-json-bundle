<?php

namespace BobHearnIT\FormJsonBundle\Tests\Configuration;

use BobHearnIT\FormJsonBundle\Serializer\Serializer;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FormConfigurationTest extends KernelTestCase
{
    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->serializer = $kernel->getContainer()->get('serializer');
    }

    public function testConstructor()
    {
        $form = $this->factory->createBuilder()
            ->add('field1', TextType::class, [
                'label' => 'Field 1',
                'required' => true,
                'attr' => ['class' => 'form-control'],
                'help' => 'This is a help text',
            ])
            ->add('subform', FormType::class)
                ->add('field2_1', TextType::class, [])
            ->add('field3', ChoiceType::class, [
                'choices' => [
                    'Choice 1' => 'choice1',
                    'Choice 2' => 'choice2',
                ]
            ])
            ->getForm();

        $serialisation = (new Serializer())->serialize($form);
dump($serialisation);

        $this->assertTrue(true);
    }
}