<?php

namespace locationVoitureBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VehiculeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('marque')->add('modele')->add('serie')->add('annee')->add('categorie')->add('kilometrage')->add('etat')->add('dateEnregistrement')->add('immatriculation')->add('nbreDePlace')->add('transmission')->add('moteur')->add('idAgence', EntityType::class,['class' => 'locationVoitureBundle:Agence', 'choice_label' => 'nom']);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'locationVoitureBundle\Entity\Vehicule'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'locationvoiturebundle_vehicule';
    }


}
