<?php

namespace locationVoitureBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class LocationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateDebut')->add('dateFin')->add('dateEnregistrement')->add('tarif')->add('idVehicule', EntityType::class, ['class' => 'locationVoitureBundle:Vehicule','choice_label' => 'id'])->add('idClient', EntityType::class,['class' => 'locationVoitureBundle:Client', 'choice_label' => function($client, $key, $index) {
    /** @var Client $client */
    return $client->getNom() . ' ' . $client->getPrenom();
}]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'locationVoitureBundle\Entity\Location'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'locationvoiturebundle_location';
    }


}
