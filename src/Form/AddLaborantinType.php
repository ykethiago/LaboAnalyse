<?php

namespace App\Form;

use App\Entity\Creneau;
use App\Entity\RendezVous;

use App\Repository\CreneauRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddLaborantinType extends AbstractType
{

    private CreneauRepository $creneauRepository;

    public function __construct(CreneauRepository $creneauRepository)
    {
        $this->creneauRepository = $creneauRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $creneaux = $this->creneauRepository->findAll();
        $choices = [];

        foreach ($creneaux as $creneau) {
            $formattedDate = $creneau->getDateRV()->format('Y-m-d');
            $date =$creneau->getDateRV();
            $choices[$formattedDate] = $date;
        }

        $builder
            ->add('dateRV', ChoiceType::class, [
                'choices' => $choices,
                'label' => 'Prendre Rendez-vous',
            ])
            ->add('status')
            ->add('motif', choicetype::class,[
                'label'=>'Choisissez votre motif de consultation',
                'choices'=>[
                        'Vaccin'=>'vaccin',
                        'Radiographie et analyses'=>'analyses',
                        'Médecine du Travail'=>'travail',
                        'Autres tests laboratoires'=>'autres'
                    ]

                ]
            )
            ->add('patient', null, [
                'choice_label' => function ($user) {
                    return $user->getFirstName() . ' ' . $user->getLastName();
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }
}
