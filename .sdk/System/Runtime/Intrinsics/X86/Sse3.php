<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Sse3Override {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AddSubtract_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AddSubtract_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function HorizontalAdd_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function HorizontalAdd_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function HorizontalSubtract_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function HorizontalSubtract_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadDquVector128_1 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadDquVector128_2 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int16* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadDquVector128_3 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt16* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadDquVector128_4 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadDquVector128_5 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadDquVector128_6 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int64* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadDquVector128_7 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadDquVector128_8 ($address){}
}
class Sse3 extends \System\Runtime\Intrinsics\X86\Sse2
{
	use Sse3Override;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses Sse3Override::AddSubtract_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse3Override::AddSubtract_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function AddSubtract (\override ...$args){}
	/**
	 * @uses Sse3Override::HorizontalAdd_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse3Override::HorizontalAdd_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function HorizontalAdd (\override ...$args){}
	/**
	 * @uses Sse3Override::HorizontalSubtract_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse3Override::HorizontalSubtract_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function HorizontalSubtract (\override ...$args){}
	/**
	 * @param \System\Double* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Double]
	 */
	public static function LoadAndDuplicateToVector128($address){}
	/**
	 * @uses Sse3Override::LoadDquVector128_1 <br>public , args: ($address)<br>
	 * @uses Sse3Override::LoadDquVector128_2 <br>public , args: ($address)<br>
	 * @uses Sse3Override::LoadDquVector128_3 <br>public , args: ($address)<br>
	 * @uses Sse3Override::LoadDquVector128_4 <br>public , args: ($address)<br>
	 * @uses Sse3Override::LoadDquVector128_5 <br>public , args: ($address)<br>
	 * @uses Sse3Override::LoadDquVector128_6 <br>public , args: ($address)<br>
	 * @uses Sse3Override::LoadDquVector128_7 <br>public , args: ($address)<br>
	 * @uses Sse3Override::LoadDquVector128_8 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function LoadDquVector128 (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Double]
	 */
	public static function MoveAndDuplicate($source){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function MoveHighAndDuplicate($source){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function MoveLowAndDuplicate($source){}
}