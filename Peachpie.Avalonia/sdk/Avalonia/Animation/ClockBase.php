<?php
namespace Avalonia\Animation;
/**
 */
class ClockBase extends \System\Object implements 
	\Avalonia\Animation\IClock,
	\System\IObservable_1
{
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasSubscriptions(){}
	/**
	 * @return \Avalonia\Animation\PlayState
	 */
	public  function get_PlayState(){}
	/**
	 * @param \Avalonia\Animation\PlayState $value
	 * @return \System\Void|void
	 */
	public  function set_PlayState($value){}
	/**
	 * @param \System\TimeSpan $systemTime
	 * @return \System\Void|void
	 */
	protected  function Pulse($systemTime){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Stop(){}
	/**
	 * @param \System\IObserver_1 $observer
	 * @return \System\IDisposable
	 */
	public  function Subscribe($observer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
