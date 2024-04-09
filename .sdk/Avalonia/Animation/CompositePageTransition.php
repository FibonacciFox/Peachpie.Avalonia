<?php
namespace Avalonia\Animation;
class CompositePageTransition extends \System\Object implements
	\Avalonia\Animation\IPageTransition
{
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Animation\IPageTransition]
	 */
	public $PageTransitions;
	/**
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @param \System\Boolean|bool $forward
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	public function Start($from, $to, $forward, $cancellationToken){}
	/**
	 */
	public function __construct(){}
}