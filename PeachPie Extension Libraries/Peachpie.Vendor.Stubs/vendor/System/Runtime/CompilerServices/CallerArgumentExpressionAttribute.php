<?php
namespace System\Runtime\CompilerServices;
final class CallerArgumentExpressionAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ParameterName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $parameterName
	 */
	public function __construct($parameterName){}
}