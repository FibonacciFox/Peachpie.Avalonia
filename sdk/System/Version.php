<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VersionMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_1($version){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2($fieldCount){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ToString_3($format, $formatProvider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryFormat_1($destination, $charsWritten){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryFormat_2($destination, $fieldCount, $charsWritten){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function TryFormat_3($destination, $charsWritten, $format, $provider){}
	/**
	 * @return \System\Version
	 */
	#[MethodOverride] public static function Parse_1($input){}
	/**
	 * @return \System\Version
	 */
	#[MethodOverride] public static function Parse_2($input){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($input, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($input, $result){}
}
/**
 */
class Version extends \System\Object implements 
	\System\ICloneable,
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Major;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Minor;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Build;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Revision;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $MajorRevision;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $MinorRevision;
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Major(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Minor(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Build(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Revision(){}
	/**
	 * @return \System\Int16
	 */
	public  function get_MajorRevision(){}
	/**
	 * @return \System\Int16
	 */
	public  function get_MinorRevision(){}
	/**
	 * @uses VersionMethodsOverride::CompareTo_1 ($version)
	 * @uses VersionMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses VersionMethodsOverride::Equals_1 ($obj)
	 * @uses VersionMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses VersionMethodsOverride::ToString_1 ()
	 * @uses VersionMethodsOverride::ToString_2 ($fieldCount)
	 * @uses VersionMethodsOverride::ToString_3 ($format, $formatProvider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses VersionMethodsOverride::TryFormat_1 ($destination, $charsWritten)
	 * @uses VersionMethodsOverride::TryFormat_2 ($destination, $fieldCount, $charsWritten)
	 * @uses VersionMethodsOverride::TryFormat_3 ($destination, $charsWritten, $format, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryFormat(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DefaultFormatFieldCount(){}
	/**
	 * @uses VersionMethodsOverride::Parse_1 ($input)
	 * @uses VersionMethodsOverride::Parse_2 ($input)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses VersionMethodsOverride::TryParse_1 ($input, $result)
	 * @uses VersionMethodsOverride::TryParse_2 ($input, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\Boolean $throwOnFailure
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseVersion($input, $throwOnFailure){}
	/**
	 * @param \System\ReadOnlySpan_1 $component
	 * @param \System\String|string $componentName
	 * @param \System\Boolean $throwOnFailure
	 * @param \System\Int32& $parsedComponent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseComponent($component, $componentName, $throwOnFailure, $parsedComponent){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean
	 */
	public static function op_Equality($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean
	 */
	public static function op_LessThan($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($v1, $v2){}
	/**
	 * @param \System\Version $v1
	 * @param \System\Version $v2
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($v1, $v2){}
}
