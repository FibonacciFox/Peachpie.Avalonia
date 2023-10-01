<?php
namespace Avalonia\Rendering;
/**
 */
class RenderLoop extends \System\Object implements 
	\Avalonia\Rendering\IRenderLoop
{
	/**
	 * @return \Avalonia\Rendering\IRenderLoop
	 */
	public static function get_LocatorAutoInstance(){}
	/**
	 * @return \Avalonia\Rendering\IRenderTimer
	 */
	protected  function get_Timer(){}
	/**
	 * @param \Avalonia\Rendering\IRenderLoopTask $i
	 * @return \System\Void|void
	 */
	public  function Add($i){}
	/**
	 * @param \Avalonia\Rendering\IRenderLoopTask $i
	 * @return \System\Void|void
	 */
	public  function Remove($i){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_RunsInBackground(){}
	/**
	 * @param \System\TimeSpan $time
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TimerTick($time){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
