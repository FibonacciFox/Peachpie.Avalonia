<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StringComparerMethodsOverride
{
	/**
	 * @return \System\StringComparer
	 */
	#[MethodOverride] public static function Create_1($culture, $ignoreCase){}
	/**
	 * @return \System\StringComparer
	 */
	#[MethodOverride] public static function Create_2($culture, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($x, $y){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_2($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_3($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_3(){}
}
/**
 */
class StringComparer extends \System\Object implements 
	\System\Collections\IComparer,
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IComparer_1,
	\System\Collections\Generic\IEqualityComparer_1
{
	/**
	 * @var \System\StringComparer
	 * @property
	 */
	public readonly $InvariantCulture;
	/**
	 * @var \System\StringComparer
	 * @property
	 */
	public readonly $InvariantCultureIgnoreCase;
	/**
	 * @var \System\StringComparer
	 * @property
	 */
	public readonly $CurrentCulture;
	/**
	 * @var \System\StringComparer
	 * @property
	 */
	public readonly $CurrentCultureIgnoreCase;
	/**
	 * @var \System\StringComparer
	 * @property
	 */
	public readonly $Ordinal;
	/**
	 * @var \System\StringComparer
	 * @property
	 */
	public readonly $OrdinalIgnoreCase;
	/**
	 * @return \System\StringComparer
	 */
	public static function get_InvariantCulture(){}
	/**
	 * @return \System\StringComparer
	 */
	public static function get_InvariantCultureIgnoreCase(){}
	/**
	 * @return \System\StringComparer
	 */
	public static function get_CurrentCulture(){}
	/**
	 * @return \System\StringComparer
	 */
	public static function get_CurrentCultureIgnoreCase(){}
	/**
	 * @return \System\StringComparer
	 */
	public static function get_Ordinal(){}
	/**
	 * @return \System\StringComparer
	 */
	public static function get_OrdinalIgnoreCase(){}
	/**
	 * @param \System\StringComparison $comparisonType
	 * @return \System\StringComparer
	 */
	public static function FromComparison($comparisonType){}
	/**
	 * @uses StringComparerMethodsOverride::Create_1 ($culture, $ignoreCase)
	 * @uses StringComparerMethodsOverride::Create_2 ($culture, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @param \System\Boolean& $ignoreCase
	 * @return \System\Boolean
	 */
	public static function IsWellKnownOrdinalComparer($comparer, $ignoreCase){}
	/**
	 * @param \System\Boolean& $ignoreCase
	 * @return \System\Boolean
	 */
	protected  function IsWellKnownOrdinalComparerCore($ignoreCase){}
	/**
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @param \System\Globalization\CompareInfo& $compareInfo
	 * @param \System\Globalization\CompareOptions& $compareOptions
	 * @return \System\Boolean
	 */
	public static function IsWellKnownCultureAwareComparer($comparer, $compareInfo, $compareOptions){}
	/**
	 * @param \System\Globalization\CompareInfo& $compareInfo
	 * @param \System\Globalization\CompareOptions& $compareOptions
	 * @return \System\Boolean
	 */
	protected  function IsWellKnownCultureAwareComparerCore($compareInfo, $compareOptions){}
	/**
	 * @uses StringComparerMethodsOverride::Compare_1 ($x, $y)
	 * @uses StringComparerMethodsOverride::Compare_2 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
	/**
	 * @uses StringComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses StringComparerMethodsOverride::Equals_2 ($x, $y)
	 * @uses StringComparerMethodsOverride::Equals_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses StringComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses StringComparerMethodsOverride::GetHashCode_2 ($obj)
	 * @uses StringComparerMethodsOverride::GetHashCode_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
