<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReadOnlySpan_1Override {
	/**
	 * @deprecated
	 * @param \T $array
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function op_Implicit_1 ($array){}
	/**
	 * @deprecated
	 * @param \System\ArraySegment_1 $segment [generic: T]
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public static function op_Implicit_2 ($segment){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public function Slice_1 ($start){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\ReadOnlySpan_1
	 */
	#[MethodOverride]public function Slice_2 ($start, $length){}
	/**
	 * @param \T $array
	 */
	#[MethodOverride]public function __construct_1 ($array){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 */
	#[MethodOverride]public function __construct_2 ($array, $start, $length){}
	/**
	 * @param \System\Void* $pointer
	 * @param \System\Int32|int $length
	 */
	#[MethodOverride]public function __construct_3 ($pointer, $length){}
	/**
	 * @param \T& &$reference
	 */
	#[MethodOverride]public function __construct_4 (&$reference){}
}
final class ReadOnlySpan_1 extends \System\ValueType
{
	use ReadOnlySpan_1Override;
	/**
	 * @field
	 * @since readonly
	 * @var \T&
	 */
	protected $_reference;
	/**
	 * @property
	 * @var \T&
	 * @since readonly
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEmpty;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[T]
	 * @since readonly
	 */
	public $Empty;
	/**
	 * @param \System\ReadOnlySpan_1 $left [generic: T]
	 * @param \System\ReadOnlySpan_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses ReadOnlySpan_1Override::op_Implicit_1 <br>public , args: ($array)<br>
	 * @uses ReadOnlySpan_1Override::op_Implicit_2 <br>public , args: ($segment)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	/**
	 * @return \System\ReadOnlySpan_1+Enumerator[T]
	 */
	public function GetEnumerator(){}
	/**
	 * @return \T&
	 */
	public function GetPinnableReference(){}
	/**
	 * @param \System\Span_1 $destination [generic: T]
	 * @return \System\Void|void
	 */
	public function CopyTo($destination){}
	/**
	 * @param \System\Span_1 $destination [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function TryCopyTo($destination){}
	/**
	 * @param \System\ReadOnlySpan_1 $left [generic: T]
	 * @param \System\ReadOnlySpan_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses ReadOnlySpan_1Override::Slice_1 <br>public , args: ($start)<br>
	 * @uses ReadOnlySpan_1Override::Slice_2 <br>public , args: ($start, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ReadOnlySpan_1|mixed|\override
	 */
	#[MethodOverridePublic]function Slice (\override ...$args){}
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	/**
	 * @uses ReadOnlySpan_1Override::__construct_1 <br>public , args: ($array)<br>
	 * @uses ReadOnlySpan_1Override::__construct_2 <br>public , args: ($array, $start, $length)<br>
	 * @uses ReadOnlySpan_1Override::__construct_3 <br>public , args: ($pointer, $length)<br>
	 * @uses ReadOnlySpan_1Override::__construct_4 <br>public , args: (&$reference)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}