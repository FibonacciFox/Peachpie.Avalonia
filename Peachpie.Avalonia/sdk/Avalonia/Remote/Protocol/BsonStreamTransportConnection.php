<?php
namespace Avalonia\Remote\Protocol;
/**
 */
class BsonStreamTransportConnection extends \System\Object implements 
	\Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public  function StartReading(){}
	/**
	 * @param \System\Byte[] $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadExact($buffer){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reader(){}
	/**
	 * @param \System\Object|object $data
	 * @return \System\Threading\Tasks\Task
	 */
	public  function Send($data){}
	/**
	 * @param \System\Exception $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FireException($e){}
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
