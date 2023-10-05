<?php
namespace Avalonia\Media;
/**
 */
class MediaContextClock extends \System\Object implements 
	\Avalonia\Animation\IGlobalClock,
	\Avalonia\Animation\IClock,
	\System\IObservable_1
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasNewSubscriptions;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasSubscriptions;
	/**
	 * @var \Avalonia\Animation\PlayState
	 * @property
	 */
	public $PlayState;
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasNewSubscriptions(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasSubscriptions(){}
	/**
	 * @param \System\IObserver_1 $observer
	 * @return \System\IDisposable
	 */
	public  function Subscribe($observer){}
	/**
	 * @param \System\Action_1 $action
	 * @return \System\Void|void
	 */
	public  function RequestAnimationFrame($action){}
	/**
	 * @param \System\TimeSpan $now
	 * @return \System\Void|void
	 */
	public  function Pulse($now){}
	/**
	 * @return \System\Void|void
	 */
	public  function PulseNewSubscriptions(){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
