<?php
namespace System\IO\Strategies;
final class BufferedFileStreamStrategy extends \System\IO\Strategies\FileStreamStrategy implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
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
	private function ReadSpan($destination, $arraySegment){}
	private function ReadByteSlow(){}
	private function ReadFromNonSeekableAsync($destination, $cancellationToken){}
	private function ReadAsyncSlowPath($semaphoreLockTask, $buffer, $cancellationToken){}
	private function WriteSpan($source, $arraySegment){}
	private function WriteByteSlow($value){}
	private function WriteToNonSeekableAsync($source, $cancellationToken){}
	private function WriteAsyncSlowPath($semaphoreLockTask, $source, $cancellationToken){}
	private function FlushAsyncInternal($cancellationToken){}
	private function CopyToAsyncCore($destination, $bufferSize, $cancellationToken){}
	private function FlushRead(){}
	private function FlushWrite(){}
	private function ClearReadBufferBeforeWrite(){}
	private function EnsureNotClosed(){}
	private function EnsureCanSeek(){}
	private function EnsureCanRead(){}
	private function EnsureCanWrite(){}
	private function EnsureBufferAllocated(){}
	private function AllocateBuffer(){}
}