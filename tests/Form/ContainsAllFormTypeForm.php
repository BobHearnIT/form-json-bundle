<?php

namespace BobHearnIT\FormJsonBundle\Tests\Form;

use BobHearnIT\FormJsonBundle\Tests\Form\Custom\SubForm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ContainsAllFormTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('text-field', TextType::class)
            ->add('subform-field', SubForm::class)
            ->add('select-field', ChoiceType::class, [
                'choices' => [
                    'Choice 1' => 'choice1',
                    'Choice 2' => 'choice2',
                ],
            ])
            ->add('radio-field', ChoiceType::class, [
                'label' => 'Radio Field',
                'choices' => [
                    'Choice 1' => 'choice1',
                    'Choice 2' => 'choice2',
                ],
                'expanded' => true,
            ])
            ->add('checkbox-field', ChoiceType::class, [
                'choices' => [
                    'Choice 1' => 'choice1',
                    'Choice 2' => 'choice2',
                ],
                'expanded' => true,
                'multiple' => true,
            ]);
    }
}