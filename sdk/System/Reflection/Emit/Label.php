<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LabelMethodsOverride
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
class Label extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_label;
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetLabelValue(){}
	/**
	 * @uses LabelMethodsOverride::Equals_1 ($obj)
	 * @uses LabelMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Reflection\Emit\Label $a
	 * @param \System\Reflection\Emit\Label $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Reflection\Emit\Label $a
	 * @param \System\Reflection\Emit\Label $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
}
