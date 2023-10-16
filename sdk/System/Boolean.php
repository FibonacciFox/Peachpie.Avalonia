<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BooleanMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2($provider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_1($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Parse_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Parse_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($value, $result){}
}
/**
 */
class Boolean extends \System\ValueType implements 
	\System\IComparable,
	\System\IConvertible,
	\System\IComparable_1,
	\System\IEquatable_1
{
	/**
	 * @var \System\String
	 * @field
	 */
	public readonly $TrueString;
	/**
	 * @var \System\String
	 * @field
	 */
	public readonly $FalseString;
	/**
	 * @uses BooleanMethodsOverride::ToString_1 ()
	 * @uses BooleanMethodsOverride::ToString_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public  function TryFormat($destination, $charsWritten){}
	/**
	 * @uses BooleanMethodsOverride::Equals_1 ($obj)
	 * @uses BooleanMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses BooleanMethodsOverride::CompareTo_1 ($obj)
	 * @uses BooleanMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Boolean
	 */
	protected static function IsTrueStringIgnoreCase($value){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @return \System\Boolean
	 */
	protected static function IsFalseStringIgnoreCase($value){}
	/**
	 * @uses BooleanMethodsOverride::Parse_1 ($value)
	 * @uses BooleanMethodsOverride::Parse_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses BooleanMethodsOverride::TryParse_1 ($value, $result)
	 * @uses BooleanMethodsOverride::TryParse_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TrimWhiteSpaceAndNull($value){}
	/**
	 * @return \System\TypeCode
	 */
	public  function GetTypeCode(){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToBoolean($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToChar($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToSByte($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToByte($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToInt16($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToUInt16($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToInt32($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToUInt32($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToInt64($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToUInt64($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToSingle($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToDouble($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToDecimal($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToDateTime($provider){}
	/**
	 * @param \System\Type $type
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToType($type, $provider){}
}
