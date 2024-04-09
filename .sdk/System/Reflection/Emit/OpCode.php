<?php
namespace System\Reflection\Emit;
final class OpCode extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Reflection\Emit\OperandType
	 * @since readonly
	 */
	public $OperandType;
	/**
	 * @property
	 * @var \System\Reflection\Emit\FlowControl
	 * @since readonly
	 */
	public $FlowControl;
	/**
	 * @property
	 * @var \System\Reflection\Emit\OpCodeType
	 * @since readonly
	 */
	public $OpCodeType;
	/**
	 * @property
	 * @var \System\Reflection\Emit\StackBehaviour
	 * @since readonly
	 */
	public $StackBehaviourPop;
	/**
	 * @property
	 * @var \System\Reflection\Emit\StackBehaviour
	 * @since readonly
	 */
	public $StackBehaviourPush;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Int16
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @return \System\Boolean|bool
	 */
	protected function EndsUncondJmpBlk(){}
	/**
	 * @return \System\Int32|int
	 */
	protected function StackChange(){}
	/**
	 * @param \System\Reflection\Emit\OpCode $a
	 * @param \System\Reflection\Emit\OpCode $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Reflection\Emit\OpCode $a
	 * @param \System\Reflection\Emit\OpCode $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
}