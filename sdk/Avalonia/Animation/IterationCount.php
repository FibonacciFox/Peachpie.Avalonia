<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IterationCountMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($IterationCount){}
}
/**
 */
class IterationCount extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Animation\IterationCount
	 * @property
	 */
	public readonly $Infinite;
	/**
	 * @var \Avalonia\Animation\IterationType
	 * @property
	 */
	public readonly $RepeatType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInfinite;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \Avalonia\Animation\IterationCount
	 */
	public static function get_Infinite(){}
	/**
	 * @return \Avalonia\Animation\IterationType
	 */
	public  function get_RepeatType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsInfinite(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_Value(){}
	/**
	 * @param \Avalonia\Animation\IterationCount $a
	 * @param \Avalonia\Animation\IterationCount $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\Animation\IterationCount $rc1
	 * @param \Avalonia\Animation\IterationCount $rc2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($rc1, $rc2){}
	/**
	 * @uses IterationCountMethodsOverride::Equals_1 ($o)
	 * @uses IterationCountMethodsOverride::Equals_2 ($IterationCount)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Animation\IterationCount
	 */
	public static function Parse($s){}
}
