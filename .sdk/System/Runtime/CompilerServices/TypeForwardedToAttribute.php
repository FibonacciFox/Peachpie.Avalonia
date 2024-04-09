<?php
namespace System\Runtime\CompilerServices;
final class TypeForwardedToAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $Destination;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $destination
	 */
	public function __construct($destination){}
}