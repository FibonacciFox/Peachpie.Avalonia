<?php
namespace Avalonia\X11;
/**
 */
class EventHandler extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \Avalonia\X11\XEvent& $xev
	 * @return \System\Void|void
	 */
	public  function Invoke($xev){}
	/**
	 * @param \Avalonia\X11\XEvent& $xev
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($xev, $callback, $object){}
	/**
	 * @param \Avalonia\X11\XEvent& $xev
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public  function EndInvoke($xev, $result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
