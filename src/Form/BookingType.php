<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/09/18
 * Time: 13:46
 */

namespace App\Form;

use App\Entity\Bookings;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingType extends AbstractType
{
	
	public function buildForm(FormBuilderInterface $builder, array $options){
		$builder
			->add('userid', null, [
				'label' => 'Userid',
			])
			->add('name', null, [
				'label' => 'Name',
			])
			->add('emailid', null, [
				'label' => 'Emailid',
			])
			->add('entrydate', null, [
				'label' => 'Entry date',
			])
			->add('exitdate', null, [
				'label' => 'Exit date',
			])
			->add('phonenumber', null, [
				'label' => 'Phone Number',
			])
			->add('submit', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, [
				'label' => 'Submit',
			
			])
			->setMethod('GET')
		;
		
	}
		public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Bookings::class,
		]);
	}
	
}