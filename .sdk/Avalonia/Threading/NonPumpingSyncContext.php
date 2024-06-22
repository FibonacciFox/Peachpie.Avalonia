<?php
namespace Avalonia\Threading;
class NonPumpingSyncContext extends \System\Threading\SynchronizationContext implements
	\System\IDisposable
{


	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Utilities\NonPumpingLockHelper+IHelperImpl $impl
	 * @return \System\IDisposable
	 */
	protected static function Use($impl){}
	/**
	 * @param \Avalonia\Utilities\NonPumpingLockHelper+IHelperImpl $impl
	 * @param \System\Threading\SynchronizationContext $inner
	 */
	public function __construct($impl, $inner){}
}