<?php
namespace Avalonia\Threading;
/**
 */
class NonPumpingSyncContext extends \System\Threading\SynchronizationContext implements 
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Utilities\IHelperImpl $impl
	 * @return \System\IDisposable
	 */
	protected static function Use($impl){}
}
