<?php
namespace Avalonia\Animation;
interface IPageTransition
{

	/**
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @param \System\Boolean|bool $forward
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	public function Start($from, $to, $forward, $cancellationToken);
}