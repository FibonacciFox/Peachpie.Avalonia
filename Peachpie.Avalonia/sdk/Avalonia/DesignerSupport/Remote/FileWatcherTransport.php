<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class FileWatcherTransport extends \System\Object implements 
	\Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection,
	\System\IDisposable,
	\Avalonia\DesignerSupport\Remote\ITransportWithEnforcedMethod
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $o
	 * @param \System\String|string $pad
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Dump($o, $pad){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdaterThread(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PreviewerMethod(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
