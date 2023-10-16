<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OpCodeMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class OpCode extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Reflection\Emit\OperandType
	 * @property
	 */
	public readonly $OperandType;
	/**
	 * @var \System\Reflection\Emit\FlowControl
	 * @property
	 */
	public readonly $FlowControl;
	/**
	 * @var \System\Reflection\Emit\OpCodeType
	 * @property
	 */
	public readonly $OpCodeType;
	/**
	 * @var \System\Reflection\Emit\StackBehaviour
	 * @property
	 */
	public readonly $StackBehaviourPop;
	/**
	 * @var \System\Reflection\Emit\StackBehaviour
	 * @property
	 */
	public readonly $StackBehaviourPush;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @return \System\Boolean
	 */
	protected  function EndsUncondJmpBlk(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function StackChange(){}
	/**
	 * @return \System\Reflection\Emit\OperandType
	 */
	public  function get_OperandType(){}
	/**
	 * @return \System\Reflection\Emit\FlowControl
	 */
	public  function get_FlowControl(){}
	/**
	 * @return \System\Reflection\Emit\OpCodeType
	 */
	public  function get_OpCodeType(){}
	/**
	 * @return \System\Reflection\Emit\StackBehaviour
	 */
	public  function get_StackBehaviourPop(){}
	/**
	 * @return \System\Reflection\Emit\StackBehaviour
	 */
	public  function get_StackBehaviourPush(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Int16
	 */
	public  function get_Value(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @uses OpCodeMethodsOverride::Equals_1 ($obj)
	 * @uses OpCodeMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Reflection\Emit\OpCode $a
	 * @param \System\Reflection\Emit\OpCode $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Reflection\Emit\OpCode $a
	 * @param \System\Reflection\Emit\OpCode $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
}
