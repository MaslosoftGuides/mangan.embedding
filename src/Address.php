<?php

namespace Maslosoft\Guides\Mangan;

use Maslosoft\Mangan\EmbeddedDocument;

/**
 * Address
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Address extends EmbeddedDocument
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
