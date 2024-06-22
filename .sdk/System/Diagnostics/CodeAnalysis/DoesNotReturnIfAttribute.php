<?php
namespace System\Diagnostics\CodeAnalysis;
final class DoesNotReturnIfAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ParameterValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $parameterValue
	 */
	public function __construct($parameterValue){}
}