<?php
namespace Avalonia\Remote\Protocol;
/**
 */
class TcpTransportBase extends \System\Object
{
	/**
	 * @param \Avalonia\Remote\Protocol\IMessageTypeResolver $resolver
	 * @param \System\IO\Stream $stream
	 * @param \System\Action $disposeCallback
	 * @return \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection
	 */
	protected  function CreateTransport($resolver, $stream, $disposeCallback){}
	/**
	 * @param \System\Net\IPAddress $address
	 * @param \System\Int32|int $port
	 * @param \System\Action_1 $cb
	 * @return \System\IDisposable
	 */
	public  function Listen($address, $port, $cb){}
	/**
	 * @param \System\Net\IPAddress $address
	 * @param \System\Int32|int $port
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function Connect($address, $port){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
