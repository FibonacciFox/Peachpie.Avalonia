<?php
namespace System\Reflection;
final class ManifestResourceStream extends \System\IO\UnmanagedMemoryStream implements
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

}