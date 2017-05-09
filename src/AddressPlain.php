<?php

namespace Maslosoft\Guides\Mangan;

use Maslosoft\Addendum\Interfaces\AnnotatedInterface;

/**
 * Address
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class AddressPlain implements AnnotatedInterface
{

	/**
	 * @RequiredValidator
	 * @var string
	 */
	public $street = '';

	/**
	 * @RequiredValidator
	 * @var string
	 */
	public $city = '';

}
