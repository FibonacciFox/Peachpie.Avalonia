<?php
namespace Avalonia\FreeDesktop\DBusIme\Fcitx;
/**
 */
class FcitxICWrapper extends \System\Object
{
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function FocusInAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function FocusOutAsync(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function ResetAsync(){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $w
	 * @param \System\Int32|int $h
	 * @return \System\Threading\Tasks\Task
	 */
	public  function SetCursorRectAsync($x, $y, $w, $h){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function DestroyICAsync(){}
	/**
	 * @param \System\UInt32 $keyVal
	 * @param \System\UInt32 $keyCode
	 * @param \System\UInt32 $state
	 * @param \System\Int32|int $type
	 * @param \System\UInt32 $time
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function ProcessKeyEventAsync($keyVal, $keyCode, $state, $type, $time){}
	/**
	 * @param \System\Action_2 $handler
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function WatchCommitStringAsync($handler){}
	/**
	 * @param \System\Action_2 $handler
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function WatchForwardKeyAsync($handler){}
	/**
	 * @param \System\UInt32 $flags
	 * @return \System\Threading\Tasks\Task
	 */
	public  function SetCapacityAsync($flags){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
