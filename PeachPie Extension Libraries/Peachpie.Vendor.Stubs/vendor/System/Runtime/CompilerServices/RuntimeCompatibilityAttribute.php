<?php
namespace System\Runtime\CompilerServices;
final class RuntimeCompatibilityAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $WrapNonExceptionThrows;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 */
	public function __construct(){}
}