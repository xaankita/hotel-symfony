<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/09/18
 * Time: 13:46
 */

namespace App\Form;

use App\Entity\Bookings;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingType extends AbstractType
{
	
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options){
		$builder
			->add('userid', TextType::class, [
				'label' => 'Userid',
			])
			->add('name', TextType::class, [
				'label' => 'Name',
			])
			->add('emailid', TextType::class, [
				'label' => 'Emailid',
			])
			->add('entrydate', DateType::class, [
				'label' => 'Entry date',
			])
			->add('exitdate', DateType::class, [
				'label' => 'Exit date',
			])
			->add('phonenumber', IntegerType::class, [
				'label' => 'Phone Number',
			])
			->add('submit', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, [
				'label' => 'Submit',

			])
			//->setMethod('GET')
		;
		
	}
		public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Bookings::class,
		]);
	}
	
}