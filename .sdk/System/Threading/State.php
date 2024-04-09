<?php
namespace System\Threading;
final class State extends \System\Object implements
	\System\Threading\Tasks\Sources\IValueTaskSource_1
{

	/**
	 * @param \System\Threading\PeriodicTimer $owner
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1[System\Boolean]
	 */
	public function WaitForNextTickAsync($owner, $cancellationToken){}
	/**
	 * @param \System\Boolean|bool $stopping
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	public function Signal($stopping, $cancellationToken){}
	private function GetResult($token){}
	private function GetStatus($token){}
	private function OnCompleted($continuation, $state, $token, $flags){}
	/**
	 */
	public function __construct(){}
}