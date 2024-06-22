<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UnmanagedMemoryStreamOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\SafeBuffer $buffer
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $length
	 * @param \System\IO\FileAccess $access
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Initialize_1 ($buffer, $offset, $length, $access){}
	/**
	 * @deprecated
	 * @param \System\Byte* $pointer
	 * @param \System\Int64|int $length
	 * @param \System\Int64|int $capacity
	 * @param \System\IO\FileAccess $access
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Initialize_2 ($pointer, $length, $capacity, $access){}
	/**
	 * @param \System\Runtime\InteropServices\SafeBuffer $buffer
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $length
	 */
	#[MethodOverride]public function __construct_1 ($buffer, $offset, $length){}
	/**
	 * @param \System\Runtime\InteropServices\SafeBuffer $buffer
	 * @param \System\Int64|int $offset
	 * @param \System\Int64|int $length
	 * @param \System\IO\FileAccess $access
	 */
	#[MethodOverride]public function __construct_2 ($buffer, $offset, $length, $access){}
	/**
	 * @param \System\Byte* $pointer
	 * @param \System\Int64|int $length
	 */
	#[MethodOverride]public function __construct_3 ($pointer, $length){}
	/**
	 * @param \System\Byte* $pointer
	 * @param \System\Int64|int $length
	 * @param \System\Int64|int $capacity
	 * @param \System\IO\FileAccess $access
	 */
	#[MethodOverride]public function __construct_4 ($pointer, $length, $capacity, $access){}
}
class UnmanagedMemoryStream extends \System\IO\Stream implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use UnmanagedMemoryStreamOverride;

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
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Int64|int
	 */
	public $Position;
	/**
	 * @property
	 * @var \System\Byte*
	 */
	public $PositionPointer;
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
	/**
	 * @uses UnmanagedMemoryStreamOverride::Initialize_1 <br>protected , args: ($buffer, $offset, $length, $access)<br>
	 * @uses UnmanagedMemoryStreamOverride::Initialize_2 <br>protected , args: ($pointer, $length, $capacity, $access)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function Initialize (\override ...$args){}
	private function EnsureNotClosed(){}
	private function EnsureReadable(){}
	private function EnsureWriteable(){}
	/**
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	protected function ReadCore($buffer){}
	/**
	 * @param \System\ReadOnlySpan_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	protected function WriteCore($buffer){}
	/**
	 * @uses UnmanagedMemoryStreamOverride::__construct_1 <br>public , args: ($buffer, $offset, $length)<br>
	 * @uses UnmanagedMemoryStreamOverride::__construct_2 <br>public , args: ($buffer, $offset, $length, $access)<br>
	 * @uses UnmanagedMemoryStreamOverride::__construct_3 <br>public , args: ($pointer, $length)<br>
	 * @uses UnmanagedMemoryStreamOverride::__construct_4 <br>public , args: ($pointer, $length, $capacity, $access)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}