<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BufferedStreamOverride {
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function ReadFromBuffer_1 ($buffer, $offset, $count){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function ReadFromBuffer_2 ($destination){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\Exception& &$error
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function ReadFromBuffer_3 ($buffer, $offset, $count, &$error){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32& $offset
	 * @param \System\Int32& $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function WriteToBuffer_1 ($buffer, $offset, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $buffer [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function WriteToBuffer_2 ($buffer){}
	/**
	 * @param \System\IO\Stream $stream
	 */
	#[MethodOverride]public function __construct_1 ($stream){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $bufferSize
	 */
	#[MethodOverride]public function __construct_2 ($stream, $bufferSize){}
}
final class BufferedStream extends \System\IO\Stream implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use BufferedStreamOverride;
	/**
	 * @field
	 * @var \System\Threading\SemaphoreSlim
	 */
	protected $_asyncActiveSemaphore;
	/**
	 * @property
	 * @var \System\IO\Stream
	 * @since readonly
	 */
	public $UnderlyingStream;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $BufferSize;
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
	public $CanWrite;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanSeek;
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
	private function EnsureCanSeek(){}
	private function EnsureCanRead(){}
	private function EnsureCanWrite(){}
	private function EnsureShadowBufferAllocated(){}
	private function EnsureBufferAllocated(){}
	private function FlushAsyncInternal($cancellationToken){}
	private function FlushRead(){}
	private function ClearReadBufferBeforeWrite(){}
	private function FlushWrite(){}
	private function FlushWriteAsync($cancellationToken){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses BufferedStreamOverride::ReadFromBuffer_1 <br>private , args: ($buffer, $offset, $count)<br>
	 * @uses BufferedStreamOverride::ReadFromBuffer_2 <br>private , args: ($destination)<br>
	 * @uses BufferedStreamOverride::ReadFromBuffer_3 <br>private , args: ($buffer, $offset, $count, &$error)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function ReadFromBuffer (\override ...$args){}
	private function ReadFromUnderlyingStreamAsync($buffer, $cancellationToken, $bytesAlreadySatisfied, $semaphoreLockTask){}
	private function ReadByteSlow(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses BufferedStreamOverride::WriteToBuffer_1 <br>private , args: ($buffer, $offset, $count)<br>
	 * @uses BufferedStreamOverride::WriteToBuffer_2 <br>private , args: ($buffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function WriteToBuffer (\override ...$args){}
	private function WriteToUnderlyingStreamAsync($buffer, $cancellationToken, $semaphoreLockTask){}
	private function WriteByteSlow($value){}
	private function CopyToAsyncCore($destination, $bufferSize, $cancellationToken){}
	/**
	 * @uses BufferedStreamOverride::__construct_1 <br>public , args: ($stream)<br>
	 * @uses BufferedStreamOverride::__construct_2 <br>public , args: ($stream, $bufferSize)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}