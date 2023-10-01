<?php
namespace Avalonia\Controls;
/**
 */
class ImmutableCrossFade extends \System\Object implements 
	\Avalonia\Animation\IPageTransition
{
	/**
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @param \System\Boolean $forward
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	public  function Start($from, $to, $forward, $cancellationToken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
