<?php
namespace System\Threading;
/**
 */
class PeriodicTimer extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function WaitForNextTickAsync($cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
