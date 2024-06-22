<?php
namespace System\Threading;
final class PeriodicTimer extends \System\Object implements
	\System\IDisposable
{


	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1[System\Boolean]
	 */
	public function WaitForNextTickAsync($cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\TimeSpan $period
	 */
	public function __construct($period){}
}