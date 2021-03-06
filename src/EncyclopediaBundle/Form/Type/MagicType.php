<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 20/10/17
 * Time: 09:28.
 */

namespace EncyclopediaBundle\Form\Type;

use EncyclopediaBundle\MagicConstants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MagicType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                'Fall' => MagicConstants::FALL,
                'Spring' => MagicConstants::SPRING,
                'Summer' => MagicConstants::SUMMER,
                'Winter' => MagicConstants::WINTER,
                'Incantation' => MagicConstants::INCANTATION,
            ),
            'choices_as_values' => true,
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
