<?php
namespace System\Diagnostics\CodeAnalysis;
final class NotNullWhenAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ReturnValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $returnValue
	 */
	public function __construct($returnValue){}
}