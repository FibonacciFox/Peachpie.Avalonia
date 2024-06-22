<?php
namespace System\Diagnostics;
final class DebuggerDisplayAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Type;
	/**
	 * @property
	 * @var \System\Type
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $TargetTypeName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $value
	 */
	public function __construct($value){}
}