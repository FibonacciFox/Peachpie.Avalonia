<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UnicodeRangeMethodsOverride
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
class UnicodeRange extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Media\UnicodeRangeSegment
	 */
	protected  function get_Single(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	protected  function get_Segments(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Boolean
	 */
	public  function IsInRange($value){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\UnicodeRange
	 */
	public static function Parse($s){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\UnicodeRange $left
	 * @param \Avalonia\Media\UnicodeRange $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\UnicodeRange $left
	 * @param \Avalonia\Media\UnicodeRange $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses UnicodeRangeMethodsOverride::Equals_1 ($obj)
	 * @uses UnicodeRangeMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
