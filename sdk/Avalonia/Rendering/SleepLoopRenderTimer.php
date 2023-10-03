<?php
namespace Avalonia\Rendering;
/**
 */
class SleepLoopRenderTimer extends \System\Object implements 
	\Avalonia\Rendering\IRenderTimer
{
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Tick($value){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Tick($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_RunsInBackground(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LoopProc(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
