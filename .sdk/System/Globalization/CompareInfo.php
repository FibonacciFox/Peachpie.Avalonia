<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompareInfoOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $culture
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Globalization\CompareInfo
	 */
	#[MethodOverride]public static function GetCompareInfo_1 ($culture, $assembly){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Globalization\CompareInfo
	 */
	#[MethodOverride]public static function GetCompareInfo_2 ($name, $assembly){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $culture
	 * @return \System\Globalization\CompareInfo
	 */
	#[MethodOverride]public static function GetCompareInfo_3 ($culture){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Globalization\CompareInfo
	 */
	#[MethodOverride]public static function GetCompareInfo_4 ($name){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSortable_1 ($ch){}
	/**
	 * @deprecated
	 * @param \System\String|string $text
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSortable_2 ($text){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $text [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSortable_3 ($text){}
	/**
	 * @deprecated
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSortable_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Serialization\StreamingContext $ctx
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnDeserialized_1 ($ctx){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnDeserialized_2 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $string1
	 * @param \System\String|string $string2
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_1 ($string1, $string2){}
	/**
	 * @deprecated
	 * @param \System\String|string $string1
	 * @param \System\String|string $string2
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_2 ($string1, $string2, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $string1
	 * @param \System\Int32|int $offset1
	 * @param \System\Int32|int $length1
	 * @param \System\String|string $string2
	 * @param \System\Int32|int $offset2
	 * @param \System\Int32|int $length2
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_3 ($string1, $offset1, $length1, $string2, $offset2, $length2){}
	/**
	 * @deprecated
	 * @param \System\String|string $string1
	 * @param \System\Int32|int $offset1
	 * @param \System\String|string $string2
	 * @param \System\Int32|int $offset2
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_4 ($string1, $offset1, $string2, $offset2, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $string1
	 * @param \System\Int32|int $offset1
	 * @param \System\String|string $string2
	 * @param \System\Int32|int $offset2
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_5 ($string1, $offset1, $string2, $offset2){}
	/**
	 * @deprecated
	 * @param \System\String|string $string1
	 * @param \System\Int32|int $offset1
	 * @param \System\Int32|int $length1
	 * @param \System\String|string $string2
	 * @param \System\Int32|int $offset2
	 * @param \System\Int32|int $length2
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_6 ($string1, $offset1, $length1, $string2, $offset2, $length2, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $string1 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $string2 [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_7 ($string1, $string2, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $prefix
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsPrefix_1 ($source, $prefix, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $prefix [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsPrefix_2 ($source, $prefix, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $prefix [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32& &$matchLength
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsPrefix_3 ($source, $prefix, $options, &$matchLength){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $prefix
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsPrefix_4 ($source, $prefix){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $suffix
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsSuffix_1 ($source, $suffix, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $suffix [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsSuffix_2 ($source, $suffix, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $suffix [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32& &$matchLength
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsSuffix_3 ($source, $suffix, $options, &$matchLength){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $suffix
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsSuffix_4 ($source, $suffix){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_1 ($source, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_2 ($source, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_3 ($source, $value, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_4 ($source, $value, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_5 ($source, $value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_6 ($source, $value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_7 ($source, $value, $startIndex, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_8 ($source, $value, $startIndex, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_9 ($source, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_10 ($source, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_11 ($source, $value, $startIndex, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_12 ($source, $value, $startIndex, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_13 ($source, $value, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32& &$matchLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_14 ($source, $value, $options, &$matchLength){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Text\Rune $value
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_15 ($source, $value, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Int32* $matchLengthPtr
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Boolean|bool $fromBeginning
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function IndexOf_16 ($source, $value, $matchLengthPtr, $options, $fromBeginning){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_1 ($source, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_2 ($source, $value){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_3 ($source, $value, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_4 ($source, $value, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_5 ($source, $value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_6 ($source, $value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_7 ($source, $value, $startIndex, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_8 ($source, $value, $startIndex, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_9 ($source, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_10 ($source, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_11 ($source, $value, $startIndex, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_12 ($source, $value, $startIndex, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_13 ($source, $value, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32& &$matchLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_14 ($source, $value, $options, &$matchLength){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Text\Rune $value
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_15 ($source, $value, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Globalization\SortKey
	 */
	#[MethodOverride]public function GetSortKey_1 ($source, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $source
	 * @return \System\Globalization\SortKey
	 */
	#[MethodOverride]public function GetSortKey_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetSortKey_3 ($source, $destination, $options){}
}
final class CompareInfo extends \System\Object implements
	\System\Runtime\Serialization\IDeserializationCallback
{
	use CompareInfoOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Globalization\CompareInfo
	 */
	protected static $Invariant;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Globalization\SortVersion
	 * @since readonly
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $LCID;
	/**
	 * @uses CompareInfoOverride::GetCompareInfo_1 <br>public , args: ($culture, $assembly)<br>
	 * @uses CompareInfoOverride::GetCompareInfo_2 <br>public , args: ($name, $assembly)<br>
	 * @uses CompareInfoOverride::GetCompareInfo_3 <br>public , args: ($culture)<br>
	 * @uses CompareInfoOverride::GetCompareInfo_4 <br>public , args: ($name)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Globalization\CompareInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetCompareInfo (\override ...$args){}
	/**
	 * @uses CompareInfoOverride::IsSortable_1 <br>public , args: ($ch)<br>
	 * @uses CompareInfoOverride::IsSortable_2 <br>public , args: ($text)<br>
	 * @uses CompareInfoOverride::IsSortable_3 <br>public , args: ($text)<br>
	 * @uses CompareInfoOverride::IsSortable_4 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsSortable (\override ...$args){}
	private function InitSort($culture){}
	private function OnDeserializing($ctx){}
	private function OnDeserialization($sender){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses CompareInfoOverride::OnDeserialized_1 <br>private , args: ($ctx)<br>
	 * @uses CompareInfoOverride::OnDeserialized_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function OnDeserialized (\override ...$args){}
	private function OnSerializing($ctx){}
	/**
	 * @uses CompareInfoOverride::Compare_1 <br>public , args: ($string1, $string2)<br>
	 * @uses CompareInfoOverride::Compare_2 <br>public , args: ($string1, $string2, $options)<br>
	 * @uses CompareInfoOverride::Compare_3 <br>public , args: ($string1, $offset1, $length1, $string2, $offset2, $length2)<br>
	 * @uses CompareInfoOverride::Compare_4 <br>public , args: ($string1, $offset1, $string2, $offset2, $options)<br>
	 * @uses CompareInfoOverride::Compare_5 <br>public , args: ($string1, $offset1, $string2, $offset2)<br>
	 * @uses CompareInfoOverride::Compare_6 <br>public , args: ($string1, $offset1, $length1, $string2, $offset2, $length2, $options)<br>
	 * @uses CompareInfoOverride::Compare_7 <br>public , args: ($string1, $string2, $options)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Compare (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $string1 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $string2 [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected function CompareOptionIgnoreCase($string1, $string2){}
	private static function CheckCompareOptionsForCompare($options){}
	private static function ThrowCompareOptionsCheckFailed($options){}
	private function CompareStringCore($string1, $string2, $options){}
	/**
	 * @uses CompareInfoOverride::IsPrefix_1 <br>public , args: ($source, $prefix, $options)<br>
	 * @uses CompareInfoOverride::IsPrefix_2 <br>public , args: ($source, $prefix, $options)<br>
	 * @uses CompareInfoOverride::IsPrefix_3 <br>public , args: ($source, $prefix, $options, &$matchLength)<br>
	 * @uses CompareInfoOverride::IsPrefix_4 <br>public , args: ($source, $prefix)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsPrefix (\override ...$args){}
	private function StartsWithCore($source, $prefix, $options, $matchLengthPtr){}
	/**
	 * @uses CompareInfoOverride::IsSuffix_1 <br>public , args: ($source, $suffix, $options)<br>
	 * @uses CompareInfoOverride::IsSuffix_2 <br>public , args: ($source, $suffix, $options)<br>
	 * @uses CompareInfoOverride::IsSuffix_3 <br>public , args: ($source, $suffix, $options, &$matchLength)<br>
	 * @uses CompareInfoOverride::IsSuffix_4 <br>public , args: ($source, $suffix)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsSuffix (\override ...$args){}
	private function EndsWithCore($source, $suffix, $options, $matchLengthPtr){}
	/**
	 * @uses CompareInfoOverride::IndexOf_1 <br>public , args: ($source, $value)<br>
	 * @uses CompareInfoOverride::IndexOf_2 <br>public , args: ($source, $value)<br>
	 * @uses CompareInfoOverride::IndexOf_3 <br>public , args: ($source, $value, $options)<br>
	 * @uses CompareInfoOverride::IndexOf_4 <br>public , args: ($source, $value, $options)<br>
	 * @uses CompareInfoOverride::IndexOf_5 <br>public , args: ($source, $value, $startIndex)<br>
	 * @uses CompareInfoOverride::IndexOf_6 <br>public , args: ($source, $value, $startIndex)<br>
	 * @uses CompareInfoOverride::IndexOf_7 <br>public , args: ($source, $value, $startIndex, $options)<br>
	 * @uses CompareInfoOverride::IndexOf_8 <br>public , args: ($source, $value, $startIndex, $options)<br>
	 * @uses CompareInfoOverride::IndexOf_9 <br>public , args: ($source, $value, $startIndex, $count)<br>
	 * @uses CompareInfoOverride::IndexOf_10 <br>public , args: ($source, $value, $startIndex, $count)<br>
	 * @uses CompareInfoOverride::IndexOf_11 <br>public , args: ($source, $value, $startIndex, $count, $options)<br>
	 * @uses CompareInfoOverride::IndexOf_12 <br>public , args: ($source, $value, $startIndex, $count, $options)<br>
	 * @uses CompareInfoOverride::IndexOf_13 <br>public , args: ($source, $value, $options)<br>
	 * @uses CompareInfoOverride::IndexOf_14 <br>public , args: ($source, $value, $options, &$matchLength)<br>
	 * @uses CompareInfoOverride::IndexOf_15 <br>public , args: ($source, $value, $options)<br>
	 * @uses CompareInfoOverride::IndexOf_16 <br>private , args: ($source, $value, $matchLengthPtr, $options, $fromBeginning)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOf (\override ...$args){}
	private function IndexOfCore($source, $target, $options, $matchLengthPtr, $fromBeginning){}
	/**
	 * @uses CompareInfoOverride::LastIndexOf_1 <br>public , args: ($source, $value)<br>
	 * @uses CompareInfoOverride::LastIndexOf_2 <br>public , args: ($source, $value)<br>
	 * @uses CompareInfoOverride::LastIndexOf_3 <br>public , args: ($source, $value, $options)<br>
	 * @uses CompareInfoOverride::LastIndexOf_4 <br>public , args: ($source, $value, $options)<br>
	 * @uses CompareInfoOverride::LastIndexOf_5 <br>public , args: ($source, $value, $startIndex)<br>
	 * @uses CompareInfoOverride::LastIndexOf_6 <br>public , args: ($source, $value, $startIndex)<br>
	 * @uses CompareInfoOverride::LastIndexOf_7 <br>public , args: ($source, $value, $startIndex, $options)<br>
	 * @uses CompareInfoOverride::LastIndexOf_8 <br>public , args: ($source, $value, $startIndex, $options)<br>
	 * @uses CompareInfoOverride::LastIndexOf_9 <br>public , args: ($source, $value, $startIndex, $count)<br>
	 * @uses CompareInfoOverride::LastIndexOf_10 <br>public , args: ($source, $value, $startIndex, $count)<br>
	 * @uses CompareInfoOverride::LastIndexOf_11 <br>public , args: ($source, $value, $startIndex, $count, $options)<br>
	 * @uses CompareInfoOverride::LastIndexOf_12 <br>public , args: ($source, $value, $startIndex, $count, $options)<br>
	 * @uses CompareInfoOverride::LastIndexOf_13 <br>public , args: ($source, $value, $options)<br>
	 * @uses CompareInfoOverride::LastIndexOf_14 <br>public , args: ($source, $value, $options, &$matchLength)<br>
	 * @uses CompareInfoOverride::LastIndexOf_15 <br>public , args: ($source, $value, $options)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function LastIndexOf (\override ...$args){}
	/**
	 * @uses CompareInfoOverride::GetSortKey_1 <br>public , args: ($source, $options)<br>
	 * @uses CompareInfoOverride::GetSortKey_2 <br>public , args: ($source)<br>
	 * @uses CompareInfoOverride::GetSortKey_3 <br>public , args: ($source, $destination, $options)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Globalization\SortKey|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetSortKey (\override ...$args){}
	private function CreateSortKeyCore($source, $options){}
	private function GetSortKeyCore($source, $destination, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	public function GetSortKeyLength($source, $options){}
	private function GetSortKeyLengthCore($source, $options){}
	private function GetHashCodeOfStringCore($source, $options){}
	private function IcuInitSortHandle($interopCultureName){}
	private function IcuCompareString($string1, $string2, $options){}
	private function IcuIndexOfCore($source, $target, $options, $matchLengthPtr, $fromBeginning){}
	private function IndexOfOrdinalIgnoreCaseHelper($source, $target, $options, $matchLengthPtr, $fromBeginning){}
	private function IndexOfOrdinalHelper($source, $target, $options, $matchLengthPtr, $fromBeginning){}
	private function IcuStartsWith($source, $prefix, $options, $matchLengthPtr){}
	private function StartsWithOrdinalIgnoreCaseHelper($source, $prefix, $options, $matchLengthPtr){}
	private function StartsWithOrdinalHelper($source, $prefix, $options, $matchLengthPtr){}
	private function IcuEndsWith($source, $suffix, $options, $matchLengthPtr){}
	private function EndsWithOrdinalIgnoreCaseHelper($source, $suffix, $options, $matchLengthPtr){}
	private function EndsWithOrdinalHelper($source, $suffix, $options, $matchLengthPtr){}
	private function IcuCreateSortKey($source, $options){}
	private function IcuGetSortKey($source, $destination, $options){}
	private function IcuGetSortKeyLength($source, $options){}
	private static function IcuIsSortable($text){}
	private function IcuGetHashCodeOfString($source, $options){}
	private static function CanUseAsciiOrdinalForOptions($options){}
	private function IcuGetSortVersion(){}
	private function InvariantCreateSortKey($source, $options){}
	private static function InvariantCreateSortKeyOrdinal($source, $sortKey){}
	private static function InvariantCreateSortKeyOrdinalIgnoreCase($source, $sortKey){}
	private static function InvariantGetSortKey($source, $destination, $options){}
	private static function InvariantGetSortKeyLength($source, $options){}
}