<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReaderWriterLockSlimOverride {
	/**
	 * @param \System\TimeSpan $timeout
	 */
	#[MethodOverride]public function __construct_1 ($timeout){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 */
	#[MethodOverride]public function __construct_2 ($millisecondsTimeout){}
}
final class TimeoutTracker extends \System\ValueType
{
	use ReaderWriterLockSlimOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $RemainingMilliseconds;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsExpired;
	/**
	 * @uses TimeoutTrackerOverride::__construct_1 <br>public , args: ($timeout)<br>
	 * @uses TimeoutTrackerOverride::__construct_2 <br>public , args: ($millisecondsTimeout)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}