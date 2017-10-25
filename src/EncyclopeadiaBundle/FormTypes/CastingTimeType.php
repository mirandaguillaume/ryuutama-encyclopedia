<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 20/10/17
 * Time: 09:27
 */

namespace EncyclopeadiaBundle\FormTypes;

use EncyclopeadiaBundle\MagicConstants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CastingTimeType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'Normal' => MagicConstants::NORMAL,
                'Ritual' => MagicConstants::RITUAL,
            ),
            'choices_as_values' => true,
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}