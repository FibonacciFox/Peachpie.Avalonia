<?php
namespace Avalonia\Animation;
/**
 */
interface IPageTransition
{
	/**
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @param \System\Boolean $forward
	 * @param \System\Threading\CancellationToken $cancellationToken
	 */
	public function Start($from, $to, $forward, $cancellationToken);
}
