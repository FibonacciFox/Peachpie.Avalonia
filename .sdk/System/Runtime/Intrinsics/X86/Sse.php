<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SseOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ReciprocalScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ReciprocalScalar_2 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ReciprocalSqrtScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ReciprocalSqrtScalar_2 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function SqrtScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function SqrtScalar_2 ($upper, $value){}
}
class Sse extends \System\Runtime\Intrinsics\X86\X86Base
{
	use SseOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Add($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function AddScalar($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function And($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function AndNot($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarOrderedEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarUnorderedEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareGreaterThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarOrderedGreaterThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarUnorderedGreaterThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarGreaterThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareGreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarOrderedGreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarUnorderedGreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarGreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareLessThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarOrderedLessThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarUnorderedLessThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarLessThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareLessThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarOrderedLessThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarUnorderedLessThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarLessThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareNotEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarOrderedNotEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function CompareScalarUnorderedNotEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarNotEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareNotGreaterThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarNotGreaterThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareNotGreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarNotGreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareNotLessThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarNotLessThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareNotLessThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarNotLessThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareOrdered($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarOrdered($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareUnordered($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function CompareScalarUnordered($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Int32|int
	 */
	public static function ConvertToInt32($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Int32|int $value
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function ConvertScalarToVector128Single($upper, $value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Int32|int
	 */
	public static function ConvertToInt32WithTruncation($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Divide($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function DivideScalar($left, $right){}
	/**
	 * @param \System\Single* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function LoadVector128($address){}
	/**
	 * @param \System\Single* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function LoadScalarVector128($address){}
	/**
	 * @param \System\Single* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function LoadAlignedVector128($address){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $lower [generic: System\Single]
	 * @param \System\Single* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function LoadHigh($lower, $address){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Single* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function LoadLow($upper, $address){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Max($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function MaxScalar($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Min($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function MinScalar($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function MoveScalar($upper, $value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function MoveHighToLow($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function MoveLowToHigh($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Int32|int
	 */
	public static function MoveMask($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Multiply($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function MultiplyScalar($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Or($left, $right){}
	/**
	 * @param \System\Void* $address
	 * @return \System\Void|void
	 */
	public static function Prefetch0($address){}
	/**
	 * @param \System\Void* $address
	 * @return \System\Void|void
	 */
	public static function Prefetch1($address){}
	/**
	 * @param \System\Void* $address
	 * @return \System\Void|void
	 */
	public static function Prefetch2($address){}
	/**
	 * @param \System\Void* $address
	 * @return \System\Void|void
	 */
	public static function PrefetchNonTemporal($address){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Reciprocal($value){}
	/**
	 * @uses SseOverride::ReciprocalScalar_1 <br>public , args: ($value)<br>
	 * @uses SseOverride::ReciprocalScalar_2 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReciprocalScalar (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function ReciprocalSqrt($value){}
	/**
	 * @uses SseOverride::ReciprocalSqrtScalar_1 <br>public , args: ($value)<br>
	 * @uses SseOverride::ReciprocalSqrtScalar_2 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReciprocalSqrtScalar (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Shuffle($left, $right, $control){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Sqrt($value){}
	/**
	 * @uses SseOverride::SqrtScalar_1 <br>public , args: ($value)<br>
	 * @uses SseOverride::SqrtScalar_2 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function SqrtScalar (\override ...$args){}
	/**
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @return \System\Void|void
	 */
	public static function StoreAligned($address, $source){}
	/**
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @return \System\Void|void
	 */
	public static function StoreAlignedNonTemporal($address, $source){}
	/**
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @return \System\Void|void
	 */
	public static function Store($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	public static function StoreFence(){}
	/**
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @return \System\Void|void
	 */
	public static function StoreScalar($address, $source){}
	/**
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @return \System\Void|void
	 */
	public static function StoreHigh($address, $source){}
	/**
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @return \System\Void|void
	 */
	public static function StoreLow($address, $source){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Subtract($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function SubtractScalar($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function UnpackHigh($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function UnpackLow($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Xor($left, $right){}
}