<?php
namespace System\IO\Strategies;
class OSFileStreamStrategy extends \System\IO\Strategies\FileStreamStrategy implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @field
	 * @since readonly
	 * @var \Microsoft\Win32\SafeHandles\SafeFileHandle
	 */
	protected $_fileHandle;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $_filePosition;
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
	public $CanSeek;
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
	/**
	 * @param \System\Int32|int $expectedBytesTransferred
	 * @param \System\Int32|int $actualBytesTransferred
	 * @return \System\Void|void
	 */
	protected function OnIncompleteOperation($expectedBytesTransferred, $actualBytesTransferred){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	protected function SetLengthCore($value){}
}