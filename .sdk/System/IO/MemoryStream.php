<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MemoryStreamOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_2 ($capacity){}
	/**
	 * @param \System\Byte $buffer
	 */
	#[MethodOverride]public function __construct_3 ($buffer){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Boolean|bool $writable
	 */
	#[MethodOverride]public function __construct_4 ($buffer, $writable){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 */
	#[MethodOverride]public function __construct_5 ($buffer, $index, $count){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Boolean|bool $writable
	 */
	#[MethodOverride]public function __construct_6 ($buffer, $index, $count, $writable){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Boolean|bool $writable
	 * @param \System\Boolean|bool $publiclyVisible
	 */
	#[MethodOverride]public function __construct_7 ($buffer, $index, $count, $writable, $publiclyVisible){}
}
class MemoryStream extends \System\IO\Stream implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use MemoryStreamOverride;

	/**
	 * @field
	 * @var \System\Threading\SemaphoreSlim
	 */
	protected $_asyncActiveSemaphore;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanRead;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanSeek;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanWrite;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Int64|int
	 */
	public $Position;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanTimeout;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ReadTimeout;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $WriteTimeout;
	private function EnsureNotClosed(){}
	private function EnsureWriteable(){}
	private function EnsureCapacity($value){}
	/**
	 * @return \System\Byte[]
	 */
	public function GetBuffer(){}
	/**
	 * @param \System\ArraySegment_1 &$buffer [generic: System\Byte]
	 * @return \System\Boolean|bool
	 */
	public function TryGetBuffer(&$buffer){}
	/**
	 * @return \System\Byte[]
	 */
	protected function InternalGetBuffer(){}
	/**
	 * @return \System\Int32|int
	 */
	protected function InternalGetPosition(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\ReadOnlySpan_1[System\Byte]
	 */
	protected function InternalReadSpan($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	protected function InternalEmulateRead($count){}
	/**
	 * @return \System\Byte[]
	 */
	public function ToArray(){}
	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\Void|void
	 */
	public function WriteTo($stream){}
	/**
	 * @uses MemoryStreamOverride::__construct_1 <br>public , args: ()<br>
	 * @uses MemoryStreamOverride::__construct_2 <br>public , args: ($capacity)<br>
	 * @uses MemoryStreamOverride::__construct_3 <br>public , args: ($buffer)<br>
	 * @uses MemoryStreamOverride::__construct_4 <br>public , args: ($buffer, $writable)<br>
	 * @uses MemoryStreamOverride::__construct_5 <br>public , args: ($buffer, $index, $count)<br>
	 * @uses MemoryStreamOverride::__construct_6 <br>public , args: ($buffer, $index, $count, $writable)<br>
	 * @uses MemoryStreamOverride::__construct_7 <br>public , args: ($buffer, $index, $count, $writable, $publiclyVisible)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}