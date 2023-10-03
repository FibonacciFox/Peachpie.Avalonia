<?php
namespace Avalonia\DesignerSupport\Remote\HtmlTransport;
/**
 */
class HtmlWebSocketTransport extends \System\Object implements 
	\Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection,
	\System\IDisposable
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AcceptWorker(){}
	/**
	 * @param \Avalonia\DesignerSupport\Remote\HtmlTransport\SimpleWebSocket $socket
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SocketReceiveWorker($socket){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SocketWorker(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $data
	 * @return \System\Threading\Tasks\Task
	 */
	public  function Send($data){}
	/**
	 * @return \System\Void|void
	 */
	public  function Start(){}
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
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $signal
	 * @param \System\Object|object $message
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSignalTransportMessage($signal, $message){}
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
	 * @param \Avalonia\Remote\Protocol\IAvaloniaRemoteTransportConnection $arg1
	 * @param \System\Exception $ex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSignalTransportException($arg1, $ex){}
	/**
	 * @param \System\String|string $message
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseMessage($message){}
	/**
	 * @param \System\String|string $modifiersText
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseInputModifiers($modifiersText){}
	/**
	 * @param \System\String|string $buttonText
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseMouseButton($buttonText){}
	/**
	 * @param \System\String|string $text
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseDouble($text){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
