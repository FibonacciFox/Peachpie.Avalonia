<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class DetachableTransportConnection extends \System\Object implements 
	\Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $transport
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public  function FireOnMessage($transport, $obj){}
	/**
	 * @param \System\Object|object $data
	 * @return \System\Threading\Tasks\Task
	 */
	public  function Send($data){}
	/**
	 * @param \System\Action_2 $value
	 * @return \System\Void|void
	 */
	public  function add_OnMessage($value){}
	/**
	 * @param \System\Action_2 $value
	 * @return \System\Void|void
	 */
	public  function remove_OnMessage($value){}
	/**
	 * @param \System\Action_2 $value
	 * @return \System\Void|void
	 */
	public  function add_OnException($value){}
	/**
	 * @param \System\Action_2 $value
	 * @return \System\Void|void
	 */
	public  function remove_OnException($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Start(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
