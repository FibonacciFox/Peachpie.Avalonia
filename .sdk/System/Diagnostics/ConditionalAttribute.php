<?php
namespace System\Diagnostics;
final class ConditionalAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ConditionString;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $conditionString
	 */
	public function __construct($conditionString){}
}