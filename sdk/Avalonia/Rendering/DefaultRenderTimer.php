<?php
namespace Avalonia\Rendering;
/**
 */
class DefaultRenderTimer extends \System\Object implements 
	\Avalonia\Rendering\IRenderTimer
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $FramesPerSecond;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $RunsInBackground;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_FramesPerSecond(){}
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
	 * @return \System\Void|void
	 */
	protected  function Start(){}
	/**
	 * @param \System\Action_1 $tick
	 * @return \System\IDisposable
	 */
	protected  function StartCore($tick){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Stop(){}
	/**
	 * @param \System\TimeSpan $tickCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalTick($tickCount){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
