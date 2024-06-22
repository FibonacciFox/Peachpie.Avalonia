<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StringComparerOverride {
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\StringComparer
	 */
	#[MethodOverride]public static function Create_1 ($culture, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\StringComparer
	 */
	#[MethodOverride]public static function Create_2 ($culture, $options){}
	/**
	 * @deprecated
	 * @param \System\Object|object $x
	 * @param \System\Object|object $y
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_1 ($x, $y){}
	/**
	 * @deprecated
	 * @param \System\String|string $x
	 * @param \System\String|string $y
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_2 ($x, $y){}
}
class StringComparer extends \System\Object implements
	\System\Collections\IComparer,
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IComparer_1,
	\System\Collections\Generic\IEqualityComparer_1
{
	use StringComparerOverride;

	/**
	 * @property
	 * @var \System\StringComparer
	 * @since readonly
	 */
	public $InvariantCulture;
	/**
	 * @property
	 * @var \System\StringComparer
	 * @since readonly
	 */
	public $InvariantCultureIgnoreCase;
	/**
	 * @property
	 * @var \System\StringComparer
	 * @since readonly
	 */
	public $CurrentCulture;
	/**
	 * @property
	 * @var \System\StringComparer
	 * @since readonly
	 */
	public $CurrentCultureIgnoreCase;
	/**
	 * @property
	 * @var \System\StringComparer
	 * @since readonly
	 */
	public $Ordinal;
	/**
	 * @property
	 * @var \System\StringComparer
	 * @since readonly
	 */
	public $OrdinalIgnoreCase;
	/**
	 * @param \System\StringComparison $comparisonType
	 * @return \System\StringComparer
	 */
	public static function FromComparison($comparisonType){}
	/**
	 * @uses StringComparerOverride::Create_1 <br>public , args: ($culture, $ignoreCase)<br>
	 * @uses StringComparerOverride::Create_2 <br>public , args: ($culture, $options)<br>
	 * @var mixed|\override ...$args
	 * @return \System\StringComparer|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: System\String]
	 * @param \System\Boolean& &$ignoreCase
	 * @return \System\Boolean|bool
	 */
	public static function IsWellKnownOrdinalComparer($comparer, &$ignoreCase){}
	/**
	 * @param \System\Boolean& &$ignoreCase
	 * @return \System\Boolean|bool
	 */
	protected function IsWellKnownOrdinalComparerCore(&$ignoreCase){}
	/**
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: System\String]
	 * @param \System\Globalization\CompareInfo& &$compareInfo
	 * @param \System\Globalization\CompareOptions& &$compareOptions
	 * @return \System\Boolean|bool
	 */
	public static function IsWellKnownCultureAwareComparer($comparer, &$compareInfo, &$compareOptions){}
	/**
	 * @param \System\Globalization\CompareInfo& &$compareInfo
	 * @param \System\Globalization\CompareOptions& &$compareOptions
	 * @return \System\Boolean|bool
	 */
	protected function IsWellKnownCultureAwareComparerCore(&$compareInfo, &$compareOptions){}
	/**
	 * @uses StringComparerOverride::Compare_1 <br>public , args: ($x, $y)<br>
	 * @uses StringComparerOverride::Compare_2 <br>public , args: ($x, $y)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Compare (\override ...$args){}
}