<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReadOnlyMemory_1Override {
	/**
	 * @deprecated
	 * @param \T $array
	 * @return \System\ReadOnlyMemory_1
	 */
	#[MethodOverride]public static function op_Implicit_1 ($array){}
	/**
	 * @deprecated
	 * @param \System\ArraySegment_1 $segment [generic: T]
	 * @return \System\ReadOnlyMemory_1
	 */
	#[MethodOverride]public static function op_Implicit_2 ($segment){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @return \System\ReadOnlyMemory_1
	 */
	#[MethodOverride]public function Slice_1 ($start){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\ReadOnlyMemory_1
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
final class ReadOnlyMemory_1 extends \System\ValueType implements
	\System\IEquatable_1
{
	use ReadOnlyMemory_1Override;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const RemoveFlagsBitMask = '2147483647';
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[T]
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
	 * @var \System\ReadOnlySpan_1[T]
	 * @since readonly
	 */
	public $Span;
	/**
	 * @uses ReadOnlyMemory_1Override::op_Implicit_1 <br>public , args: ($array)<br>
	 * @uses ReadOnlyMemory_1Override::op_Implicit_2 <br>public , args: ($segment)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ReadOnlyMemory_1|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	/**
	 * @uses ReadOnlyMemory_1Override::Slice_1 <br>public , args: ($start)<br>
	 * @uses ReadOnlyMemory_1Override::Slice_2 <br>public , args: ($start, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ReadOnlyMemory_1|mixed|\override
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
	 * @param \System\Int32& &$start
	 * @param \System\Int32& &$length
	 * @return \System\Object|object
	 */
	protected function GetObjectStartLength(&$start, &$length){}
	/**
	 * @uses ReadOnlyMemory_1Override::__construct_1 <br>public , args: ($array)<br>
	 * @uses ReadOnlyMemory_1Override::__construct_2 <br>public , args: ($array, $start, $length)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}