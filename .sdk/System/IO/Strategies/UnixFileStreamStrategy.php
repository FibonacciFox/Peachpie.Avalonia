<?php
namespace System\IO\Strategies;
final class UnixFileStreamStrategy extends \System\IO\Strategies\OSFileStreamStrategy implements
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

}