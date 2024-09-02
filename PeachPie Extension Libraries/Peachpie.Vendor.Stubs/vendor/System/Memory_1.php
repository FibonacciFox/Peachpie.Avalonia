<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Memory_1Override {
	/**
	 * @deprecated
	 * @param \T $array
	 * @return \System\Memory_1
	 */
	#[MethodOverride]public static function op_Implicit_1 ($array){}
	/**
	 * @deprecated
	 * @param \System\ArraySegment_1 $segment [generic: T]
	 * @return \System\Memory_1
	 */
	#[MethodOverride]public static function op_Implicit_2 ($segment){}
	/**
	 * @deprecated
	 * @param \System\Memory_1 $memory [generic: T]
	 * @return \System\ReadOnlyMemory_1
	 */
	#[MethodOverride]public static function op_Implicit_3 ($memory){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @return \System\Memory_1
	 */
	#[MethodOverride]public function Slice_1 ($start){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\Memory_1
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
}
final class Memory_1 extends \System\ValueType implements
	\System\IEquatable_1
{
	use Memory_1Override;
	/**
	 * @property
	 * @var \System\Memory_1[T]
	 * @since readonly
	 */
	public $Empty;
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
	 * @var \System\Span_1[T]
	 * @since readonly
	 */
	public $Span;
	/**
	 * @uses Memory_1Override::op_Implicit_1 <br>public , args: ($array)<br>
	 * @uses Memory_1Override::op_Implicit_2 <br>public , args: ($segment)<br>
	 * @uses Memory_1Override::op_Implicit_3 <br>public , args: ($memory)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Memory_1|\System\ReadOnlyMemory_1|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	/**
	 * @uses Memory_1Override::Slice_1 <br>public , args: ($start)<br>
	 * @uses Memory_1Override::Slice_2 <br>public , args: ($start, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Memory_1|mixed|\override
	 */
	#[MethodOverridePublic]function Slice (\override ...$args){}
	/**
	 * @param \System\Memory_1 $destination [generic: T]
	 * @return \System\Void|void
	 */
	public function CopyTo($destination){}
	/**
	 * @param \System\Memory_1 $destination [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function TryCopyTo($destination){}
	/**
	 * @return \System\Buffers\MemoryHandle
	 */
	public function Pin(){}
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	/**
	 * @uses Memory_1Override::__construct_1 <br>public , args: ($array)<br>
	 * @uses Memory_1Override::__construct_2 <br>public , args: ($array, $start, $length)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}