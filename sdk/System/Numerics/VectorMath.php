<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VectorMathMethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ConditionalSelectBitwise_1($selector, $ifTrue, $ifFalse){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ConditionalSelectBitwise_2($selector, $ifTrue, $ifFalse){}
}
/**
 */
class VectorMath extends \System\Object
{
	/**
	 * @uses VectorMathMethodsOverride::ConditionalSelectBitwise_1 ($selector, $ifTrue, $ifFalse)
	 * @uses VectorMathMethodsOverride::ConditionalSelectBitwise_2 ($selector, $ifTrue, $ifFalse)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConditionalSelectBitwise(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector1
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector2
	 * @return \System\Boolean
	 */
	public static function Equal($vector1, $vector2){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b
	 * @param \System\Runtime\Intrinsics\Vector128_1 $t
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function Lerp($a, $b, $t){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector1
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector2
	 * @return \System\Boolean
	 */
	public static function NotEqual($vector1, $vector2){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
