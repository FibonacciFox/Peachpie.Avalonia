<?php
namespace System\IO\Strategies;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileStreamStrategyOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $flushToDisk
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Flush_1 ($flushToDisk){}
}
class FileStreamStrategy extends \System\IO\Stream implements
	\System\IDisposable,
	\System\IAsyncDisposable
{
	use FileStreamStrategyOverride;
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
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	abstract protected function Lock($position, $length);
	/**
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	abstract protected function Unlock($position, $length);
	/**
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	protected function DisposeInternal($disposing){}
}