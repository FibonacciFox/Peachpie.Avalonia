<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SequenceReaderExtensionsOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $initialCapacity
	 */
	#[MethodOverride]public function __construct_2 ($initialCapacity){}
}
final class ArrayBufferWriter_1 extends \System\Object implements
	\System\Buffers\IBufferWriter_1
{
	use SequenceReaderExtensionsOverride;
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[T]
	 * @since readonly
	 */
	public $WrittenMemory;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[T]
	 * @since readonly
	 */
	public $WrittenSpan;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $WrittenCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $FreeCapacity;
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function Advance($count){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @return \System\Memory_1[T]
	 */
	public function GetMemory($sizeHint){}
	/**
	 * @param \System\Int32|int $sizeHint
	 * @return \System\Span_1[T]
	 */
	public function GetSpan($sizeHint){}
	private function CheckAndResizeBuffer($sizeHint){}
	private static function ThrowInvalidOperationException_AdvancedTooFar($capacity){}
	private static function ThrowOutOfMemoryException($capacity){}
	/**
	 * @uses ArrayBufferWriter_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses ArrayBufferWriter_1Override::__construct_2 <br>public , args: ($initialCapacity)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}