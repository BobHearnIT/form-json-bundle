<?php

namespace BobHearnIT\FormJsonBundle\Configuration;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class FormConfiguration
{
    public function __construct(
        protected FormInterface $form,
    )
    {
    }

    public function getFormView(): FormView
    {
        return $this->form->createView();
    }

    public function getForm(): FormInterface
    {
        return $this->form;
    }
}