<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class TaskForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', Field::TEXT, [
                'rules' => 'required',
                'label' => 'タイトル'
            ])
            ->add('content', Field::TEXTAREA, [
                'rules' => 'required|max:500',
                'label' => '内容'
            ])
            ->add('due', Field::DATE, [
                'rules' => 'required',
                'label' => '期限'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => '保存',
                'attr' => [
                    'class' => 'btn btn-block btn-primary'
                ]
            ])
        ;
    }
}
