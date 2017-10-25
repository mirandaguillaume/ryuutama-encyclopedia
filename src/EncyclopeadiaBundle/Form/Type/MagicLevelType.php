<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 20/10/17
 * Time: 09:15
 */

namespace EncyclopeadiaBundle\Form\Type;

use EncyclopeadiaBundle\MagicConstants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MagicLevelType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'Low level' => MagicConstants::LOW_LEVEL,
                'Mid level' => MagicConstants::MID_LEVEL,
                'High level' => MagicConstants::HIGH_LEVEL,
            ),
            'choices_as_values' => true,
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
