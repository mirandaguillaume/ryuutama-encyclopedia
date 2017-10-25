<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 20/10/17
 * Time: 09:20
 */

namespace EncyclopeadiaBundle\FormTypes;

use EncyclopeadiaBundle\MagicConstants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MagicRangeType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'Touch' => MagicConstants::TOUCH,
                'Caster' => MagicConstants::SPELLCASTER,
                'Close area' => MagicConstants::CLOSE,
                'All areas' => MagicConstants::FAR,
                'All' => MagicConstants::ILLIMITED
            ),
            'choices_as_values' => true,
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}