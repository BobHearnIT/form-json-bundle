<?php

namespace BobHearnIT\FormJsonBundle\Tests\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EmptyForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
    }
}