<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait VectorMathOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $selector [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $ifTrue [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $ifFalse [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConditionalSelectBitwise_1 ($selector, $ifTrue, $ifFalse){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $selector [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $ifTrue [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $ifFalse [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConditionalSelectBitwise_2 ($selector, $ifTrue, $ifFalse){}
}
class VectorMath extends \System\Object
{
	use VectorMathOverride;

	/**
	 * @uses VectorMathOverride::ConditionalSelectBitwise_1 <br>public , args: ($selector, $ifTrue, $ifFalse)<br>
	 * @uses VectorMathOverride::ConditionalSelectBitwise_2 <br>public , args: ($selector, $ifTrue, $ifFalse)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConditionalSelectBitwise (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector1 [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector2 [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function Equal($vector1, $vector2){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $t [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function Lerp($a, $b, $t){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector1 [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector2 [generic: System\Single]
	 * @return \System\Boolean|bool
	 */
	public static function NotEqual($vector1, $vector2){}
}