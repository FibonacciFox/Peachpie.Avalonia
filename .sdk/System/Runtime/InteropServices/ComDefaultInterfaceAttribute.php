<?php
namespace System\Runtime\InteropServices;
final class ComDefaultInterfaceAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $defaultInterface
	 */
	public function __construct($defaultInterface){}
}