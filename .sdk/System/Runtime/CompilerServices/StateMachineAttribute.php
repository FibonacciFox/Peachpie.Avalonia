<?php
namespace System\Runtime\CompilerServices;
class StateMachineAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $StateMachineType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $stateMachineType
	 */
	public function __construct($stateMachineType){}
}