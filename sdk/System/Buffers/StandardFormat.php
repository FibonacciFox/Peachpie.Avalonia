<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StandardFormatMethodsOverride
{
	/**
	 * @return \System\Buffers\StandardFormat
	 */
	#[MethodOverride] public static function Parse_1($format){}
	/**
	 * @return \System\Buffers\StandardFormat
	 */
	#[MethodOverride] public static function Parse_2($format){}
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
class StandardFormat extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $NoPrecision;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $MaxPrecision;
	/**
	 * @var \System\Char
	 * @property
	 */
	public readonly $Symbol;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Precision;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasPrecision;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDefault;
	/**
	 * @return \System\Char
	 */
	public  function get_Symbol(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_Precision(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasPrecision(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDefault(){}
	/**
	 * @param \System\Char $symbol
	 * @return \System\Buffers\StandardFormat
	 */
	public static function op_Implicit($symbol){}
	/**
	 * @uses StandardFormatMethodsOverride::Parse_1 ($format)
	 * @uses StandardFormatMethodsOverride::Parse_2 ($format)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Buffers\StandardFormat& $result
	 * @return \System\Boolean
	 */
	public static function TryParse($format, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Buffers\StandardFormat& $standardFormat
	 * @param \System\Boolean $throws
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseHelper($format, $standardFormat, $throws){}
	/**
	 * @uses StandardFormatMethodsOverride::Equals_1 ($obj)
	 * @uses StandardFormatMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Span_1 $destination
	 * @return \System\Int32|int
	 */
	protected  function Format($destination){}
	/**
	 * @param \System\Buffers\StandardFormat $left
	 * @param \System\Buffers\StandardFormat $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Buffers\StandardFormat $left
	 * @param \System\Buffers\StandardFormat $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
