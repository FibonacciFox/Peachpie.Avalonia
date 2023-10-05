<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UnicodeRangeSegmentMethodsOverride
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
class UnicodeRangeSegment extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Start;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $End;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Start(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_End(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Boolean
	 */
	public  function IsInRange($value){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\UnicodeRangeSegment
	 */
	public static function Parse($s){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\UnicodeRangeSegment $left
	 * @param \Avalonia\Media\UnicodeRangeSegment $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\UnicodeRangeSegment $left
	 * @param \Avalonia\Media\UnicodeRangeSegment $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses UnicodeRangeSegmentMethodsOverride::Equals_1 ($obj)
	 * @uses UnicodeRangeSegmentMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
