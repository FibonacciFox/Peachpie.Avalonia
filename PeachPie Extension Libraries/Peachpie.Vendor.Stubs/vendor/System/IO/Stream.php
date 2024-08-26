<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StreamOverride {
	/**
	 * @deprecated
	 * @param \System\IO\Stream $destination
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($destination){}
	/**
	 * @deprecated
	 * @param \System\IO\Stream $destination
	 * @param \System\Int32|int $bufferSize
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($destination, $bufferSize){}
	/**
	 * @deprecated
	 * @param \System\IO\Stream $destination
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function CopyToAsync_1 ($destination){}
	/**
	 * @deprecated
	 * @param \System\IO\Stream $destination
	 * @param \System\Int32|int $bufferSize
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function CopyToAsync_2 ($destination, $bufferSize){}
	/**
	 * @deprecated
	 * @param \System\IO\Stream $destination
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function CopyToAsync_3 ($destination, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\IO\Stream $destination
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function CopyToAsync_4 ($destination, $bufferSize, $cancellationToken){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
	/**
	 * @deprecated
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FlushAsync_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function FlushAsync_2 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ReadAsync_1 ($buffer, $offset, $count){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ReadAsync_2 ($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Memory_1 $buffer [generic: System\Byte]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride]public function ReadAsync_3 ($buffer, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Memory_1 $buffer [generic: System\Byte]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride]public function ReadExactlyAsync_1 ($buffer, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride]public function ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteAsync_1 ($buffer, $offset, $count){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WriteAsync_2 ($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlyMemory_1 $buffer [generic: System\Byte]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride]public function WriteAsync_3 ($buffer, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_1 ($buffer, $offset, $count){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Read_2 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ReadExactly_1 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ReadExactly_2 ($buffer, $offset, $count){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_1 ($buffer, $offset, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_2 ($buffer){}
}
class Stream extends \System\MarshalByRefObject implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use StreamOverride;
	/**
	 * @field
	 * @var \System\Threading\SemaphoreSlim
	 */
	protected $_asyncActiveSemaphore;
	/**
	 * @field
	 * @since readonly
	 * @var \System\IO\Stream
	 */
	public static $Null;
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
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanTimeout;
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
	 * @var \System\Int32|int
	 */
	public $ReadTimeout;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $WriteTimeout;
	/**
	 * @return \System\Threading\SemaphoreSlim
	 */
	protected function EnsureAsyncActiveSemaphoreInitialized(){}
	/**
	 * @uses StreamOverride::CopyTo_1 <br>public , args: ($destination)<br>
	 * @uses StreamOverride::CopyTo_2 <br>public , args: ($destination, $bufferSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses StreamOverride::CopyToAsync_1 <br>public , args: ($destination)<br>
	 * @uses StreamOverride::CopyToAsync_2 <br>public , args: ($destination, $bufferSize)<br>
	 * @uses StreamOverride::CopyToAsync_3 <br>public , args: ($destination, $cancellationToken)<br>
	 * @uses StreamOverride::CopyToAsync_4 <br>public , args: ($destination, $bufferSize, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function CopyToAsync (\override ...$args){}
	private function GetCopyBufferSize(){}
	/**
	 * @uses StreamOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses StreamOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function DisposeAsync(){}
	/**
	 * @return \System\Void|void
	 */
	abstract public function Flush();
	/**
	 * @uses StreamOverride::FlushAsync_1 <br>public , args: ()<br>
	 * @uses StreamOverride::FlushAsync_2 <br>public , args: ($cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function FlushAsync (\override ...$args){}
	/**
	 * @return \System\Threading\WaitHandle
	 */
	protected function CreateWaitHandle(){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	public function BeginRead($buffer, $offset, $count, $callback, $state){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Boolean|bool $serializeAsynchronously
	 * @param \System\Boolean|bool $apm
	 * @return \System\Threading\Tasks\Task_1[System\Int32]
	 */
	protected function BeginReadInternal($buffer, $offset, $count, $callback, $state, $serializeAsynchronously, $apm){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Int32|int
	 */
	public function EndRead($asyncResult){}
	/**
	 * @uses StreamOverride::ReadAsync_1 <br>public , args: ($buffer, $offset, $count)<br>
	 * @uses StreamOverride::ReadAsync_2 <br>public , args: ($buffer, $offset, $count, $cancellationToken)<br>
	 * @uses StreamOverride::ReadAsync_3 <br>public , args: ($buffer, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|\System\Threading\Tasks\ValueTask_1|mixed|\override
	 */
	#[MethodOverridePublic]function ReadAsync (\override ...$args){}
	/**
	 * @uses StreamOverride::ReadExactlyAsync_1 <br>public , args: ($buffer, $cancellationToken)<br>
	 * @uses StreamOverride::ReadExactlyAsync_2 <br>public , args: ($buffer, $offset, $count, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\ValueTask|mixed|\override
	 */
	#[MethodOverridePublic]function ReadExactlyAsync (\override ...$args){}
	/**
	 * @param \System\Memory_1 $buffer [generic: System\Byte]
	 * @param \System\Int32|int $minimumBytes
	 * @param \System\Boolean|bool $throwOnEndOfStream
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1[System\Int32]
	 */
	public function ReadAtLeastAsync($buffer, $minimumBytes, $throwOnEndOfStream, $cancellationToken){}
	private function ReadAtLeastAsyncCore($buffer, $minimumBytes, $throwOnEndOfStream, $cancellationToken){}
	private function HasOverriddenBeginEndRead(){}
	private function HasOverriddenBeginEndWrite(){}
	private function BeginEndReadAsync($buffer, $offset, $count){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	public function BeginWrite($buffer, $offset, $count, $callback, $state){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Boolean|bool $serializeAsynchronously
	 * @param \System\Boolean|bool $apm
	 * @return \System\Threading\Tasks\Task
	 */
	protected function BeginWriteInternal($buffer, $offset, $count, $callback, $state, $serializeAsynchronously, $apm){}
	private static function RunReadWriteTaskWhenReady($asyncWaiter, $readWriteTask){}
	private static function RunReadWriteTask($readWriteTask){}
	private function FinishTrackingAsyncOperation($task){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Void|void
	 */
	public function EndWrite($asyncResult){}
	/**
	 * @uses StreamOverride::WriteAsync_1 <br>public , args: ($buffer, $offset, $count)<br>
	 * @uses StreamOverride::WriteAsync_2 <br>public , args: ($buffer, $offset, $count, $cancellationToken)<br>
	 * @uses StreamOverride::WriteAsync_3 <br>public , args: ($buffer, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\ValueTask|mixed|\override
	 */
	#[MethodOverridePublic]function WriteAsync (\override ...$args){}
	private static function FinishWriteAsync($writeTask, $localBuffer){}
	private function BeginEndWriteAsync($buffer, $offset, $count){}
	/**
	 * @param \System\Int64|int $offset
	 * @param \System\IO\SeekOrigin $origin
	 * @return \System\Int64|int
	 */
	abstract public function Seek($offset, $origin);
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	abstract public function SetLength($value);
	/**
	 * @uses StreamOverride::Read_1 <br>public , args: ($buffer, $offset, $count)<br>
	 * @uses StreamOverride::Read_2 <br>public , args: ($buffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Read (\override ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public function ReadByte(){}
	/**
	 * @uses StreamOverride::ReadExactly_1 <br>public , args: ($buffer)<br>
	 * @uses StreamOverride::ReadExactly_2 <br>public , args: ($buffer, $offset, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ReadExactly (\override ...$args){}
	/**
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @param \System\Int32|int $minimumBytes
	 * @param \System\Boolean|bool $throwOnEndOfStream
	 * @return \System\Int32|int
	 */
	public function ReadAtLeast($buffer, $minimumBytes, $throwOnEndOfStream){}
	private function ReadAtLeastCore($buffer, $minimumBytes, $throwOnEndOfStream){}
	/**
	 * @uses StreamOverride::Write_1 <br>public , args: ($buffer, $offset, $count)<br>
	 * @uses StreamOverride::Write_2 <br>public , args: ($buffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Write (\override ...$args){}
	/**
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	public function WriteByte($value){}
	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\IO\Stream
	 */
	public static function Synchronized($stream){}
	/**
	 * @return \System\Void|void
	 */
	protected function ObjectInvariant(){}
	/**
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function ValidateBufferArguments($buffer, $offset, $count){}
	private static function ValidateReadAtLeastArguments($bufferLength, $minimumBytes){}
	/**
	 * @param \System\IO\Stream $destination
	 * @param \System\Int32|int $bufferSize
	 * @return \System\Void|void
	 */
	protected static function ValidateCopyToArguments($destination, $bufferSize){}
}