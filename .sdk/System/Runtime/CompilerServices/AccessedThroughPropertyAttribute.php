<?php
namespace System\Runtime\CompilerServices;
final class AccessedThroughPropertyAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $PropertyName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $propertyName
	 */
	public function __construct($propertyName){}
}