<?php
namespace System\Numerics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Vector_1Override {
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Explicit_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $left [generic: T]
	 * @param \System\Numerics\Vector_1 $right [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Multiply_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @param \T|object $factor
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Multiply_2 ($value, $factor){}
	/**
	 * @deprecated
	 * @param \T|object $factor
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]public static function op_Multiply_3 ($factor, $value){}
	/**
	 * @deprecated
	 * @param \T $destination
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($destination){}
	/**
	 * @deprecated
	 * @param \T $destination
	 * @param \System\Int32|int $startIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($destination, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_3 ($destination){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_4 ($destination){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryCopyTo_1 ($destination){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: T]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryCopyTo_2 ($destination){}
	/**
	 * @param \T|object $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \T $values
	 */
	#[MethodOverride]public function __construct_2 ($values){}
	/**
	 * @param \T $values
	 * @param \System\Int32|int $index
	 */
	#[MethodOverride]public function __construct_3 ($values, $index){}
	/**
	 * @param \System\ReadOnlySpan_1 $values [generic: T]
	 */
	#[MethodOverride]public function __construct_4 ($values){}
	/**
	 * @param \System\ReadOnlySpan_1 $values [generic: System\Byte]
	 */
	#[MethodOverride]public function __construct_5 ($values){}
	/**
	 * @param \System\Span_1 $values [generic: T]
	 */
	#[MethodOverride]public function __construct_6 ($values){}
}
final class Vector_1 extends \System\ValueType implements
	\System\IEquatable_1,
	\System\IFormattable
{
	use Vector_1Override;

	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt64
	 */
	protected $_00;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt64
	 */
	protected $_01;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @property
	 * @var \System\Numerics\Vector_1[T]
	 * @since readonly
	 */
	public $One;
	/**
	 * @property
	 * @var \System\Numerics\Vector_1[T]
	 * @since readonly
	 */
	public $Zero;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Item;
	/**
	 * @param \System\Numerics\Vector_1 $left [generic: T]
	 * @param \System\Numerics\Vector_1 $right [generic: T]
	 * @return \System\Numerics\Vector_1[T]
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left [generic: T]
	 * @param \System\Numerics\Vector_1 $right [generic: T]
	 * @return \System\Numerics\Vector_1[T]
	 */
	public static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left [generic: T]
	 * @param \System\Numerics\Vector_1 $right [generic: T]
	 * @return \System\Numerics\Vector_1[T]
	 */
	public static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left [generic: T]
	 * @param \System\Numerics\Vector_1 $right [generic: T]
	 * @return \System\Numerics\Vector_1[T]
	 */
	public static function op_Division($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left [generic: T]
	 * @param \System\Numerics\Vector_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $left [generic: T]
	 * @param \System\Numerics\Vector_1 $right [generic: T]
	 * @return \System\Numerics\Vector_1[T]
	 */
	public static function op_ExclusiveOr($left, $right){}
	/**
	 * @uses Vector_1Override::op_Explicit_1 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_2 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_3 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_4 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_5 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_6 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_7 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_8 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_9 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_10 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_11 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::op_Explicit_12 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Vector_1|mixed|\override
	 */
	#[MethodOverridePublic]function op_Explicit (\override ...$args){}
	/**
	 * @param \System\Numerics\Vector_1 $left [generic: T]
	 * @param \System\Numerics\Vector_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses Vector_1Override::op_Multiply_1 <br>public , args: ($left, $right)<br>
	 * @uses Vector_1Override::op_Multiply_2 <br>public , args: ($value, $factor)<br>
	 * @uses Vector_1Override::op_Multiply_3 <br>public , args: ($factor, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Vector_1|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
	/**
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1[T]
	 */
	public static function op_OnesComplement($value){}
	/**
	 * @param \System\Numerics\Vector_1 $left [generic: T]
	 * @param \System\Numerics\Vector_1 $right [generic: T]
	 * @return \System\Numerics\Vector_1[T]
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Numerics\Vector_1 $value [generic: T]
	 * @return \System\Numerics\Vector_1[T]
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @uses Vector_1Override::CopyTo_1 <br>public , args: ($destination)<br>
	 * @uses Vector_1Override::CopyTo_2 <br>public , args: ($destination, $startIndex)<br>
	 * @uses Vector_1Override::CopyTo_3 <br>public , args: ($destination)<br>
	 * @uses Vector_1Override::CopyTo_4 <br>public , args: ($destination)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses Vector_1Override::TryCopyTo_1 <br>public , args: ($destination)<br>
	 * @uses Vector_1Override::TryCopyTo_2 <br>public , args: ($destination)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryCopyTo (\override ...$args){}
	/**
	 * @uses Vector_1Override::__construct_1 <br>public , args: ($value)<br>
	 * @uses Vector_1Override::__construct_2 <br>public , args: ($values)<br>
	 * @uses Vector_1Override::__construct_3 <br>public , args: ($values, $index)<br>
	 * @uses Vector_1Override::__construct_4 <br>public , args: ($values)<br>
	 * @uses Vector_1Override::__construct_5 <br>public , args: ($values)<br>
	 * @uses Vector_1Override::__construct_6 <br>public , args: ($values)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}