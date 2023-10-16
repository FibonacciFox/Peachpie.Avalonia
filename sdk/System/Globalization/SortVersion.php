<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SortVersionMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class SortVersion extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $FullVersion;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $SortId;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_FullVersion(){}
	/**
	 * @return \System\Guid
	 */
	public  function get_SortId(){}
	/**
	 * @uses SortVersionMethodsOverride::Equals_1 ($obj)
	 * @uses SortVersionMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Globalization\SortVersion $left
	 * @param \System\Globalization\SortVersion $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Globalization\SortVersion $left
	 * @param \System\Globalization\SortVersion $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
