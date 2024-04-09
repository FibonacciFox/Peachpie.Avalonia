<?php
namespace Avalonia\Controls;
class ImmutableCrossFade extends \System\Object implements
	\Avalonia\Animation\IPageTransition
{

	/**
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @param \System\Boolean|bool $forward
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	public function Start($from, $to, $forward, $cancellationToken){}
	/**
	 * @param \System\TimeSpan $duration
	 */
	public function __construct($duration){}
}