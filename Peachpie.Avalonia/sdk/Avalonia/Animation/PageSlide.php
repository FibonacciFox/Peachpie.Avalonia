<?php
namespace Avalonia\Animation;
/**
 */
class PageSlide extends \System\Object implements 
	\Avalonia\Animation\IPageTransition
{
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Duration(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_Duration($value){}
	/**
	 * @return \Avalonia\Animation\SlideAxis
	 */
	public  function get_Orientation(){}
	/**
	 * @param \Avalonia\Animation\SlideAxis $value
	 * @return \System\Void|void
	 */
	public  function set_Orientation($value){}
	/**
	 * @return \Avalonia\Animation\Easings\Easing
	 */
	public  function get_SlideInEasing(){}
	/**
	 * @param \Avalonia\Animation\Easings\Easing $value
	 * @return \System\Void|void
	 */
	public  function set_SlideInEasing($value){}
	/**
	 * @return \Avalonia\Animation\Easings\Easing
	 */
	public  function get_SlideOutEasing(){}
	/**
	 * @param \Avalonia\Animation\Easings\Easing $value
	 * @return \System\Void|void
	 */
	public  function set_SlideOutEasing($value){}
	/**
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @param \System\Boolean $forward
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	public  function Start($from, $to, $forward, $cancellationToken){}
	/**
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @return \Avalonia\Visual
	 */
	protected static function GetVisualParent($from, $to){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
