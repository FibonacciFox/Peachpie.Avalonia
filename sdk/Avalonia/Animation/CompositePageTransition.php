<?php
namespace Avalonia\Animation;
/**
 */
class CompositePageTransition extends \System\Object implements 
	\Avalonia\Animation\IPageTransition
{
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Animation\IPageTransition]
	 * @property
	 */
	public $PageTransitions;
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_PageTransitions(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PageTransitions($value){}
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
