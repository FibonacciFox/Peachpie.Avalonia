<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CrossFadeMethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function Start_1($from, $to, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] private  function Start_2($from, $to, $forward, $cancellationToken){}
}
/**
 */
class CrossFade extends \System\Object implements 
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
	 * @return \Avalonia\Animation\Easings\Easing
	 */
	public  function get_FadeInEasing(){}
	/**
	 * @param \Avalonia\Animation\Easings\Easing $value
	 * @return \System\Void|void
	 */
	public  function set_FadeInEasing($value){}
	/**
	 * @return \Avalonia\Animation\Easings\Easing
	 */
	public  function get_FadeOutEasing(){}
	/**
	 * @param \Avalonia\Animation\Easings\Easing $value
	 * @return \System\Void|void
	 */
	public  function set_FadeOutEasing($value){}
	/**
	 * @uses CrossFadeMethodsOverride::Start_1 ($from, $to, $cancellationToken)
	 * @uses CrossFadeMethodsOverride::Start_2 ($from, $to, $forward, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
