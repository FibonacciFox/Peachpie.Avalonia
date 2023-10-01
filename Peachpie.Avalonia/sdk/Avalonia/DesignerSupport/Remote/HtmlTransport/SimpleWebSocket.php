<?php
namespace Avalonia\DesignerSupport\Remote\HtmlTransport;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SimpleWebSocketMethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function SendMessage_1($text){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function SendMessage_2($isText, $data){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function SendMessage_3($isText, $data, $offset, $length){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] private  function ReadExact_1($from, $to, $length){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] private  function ReadExact_2($from, $to, $offset, $length){}
}
/**
 */
class SimpleWebSocket extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses SimpleWebSocketMethodsOverride::SendMessage_1 ($text)
	 * @uses SimpleWebSocketMethodsOverride::SendMessage_2 ($isText, $data)
	 * @uses SimpleWebSocketMethodsOverride::SendMessage_3 ($isText, $data, $offset, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SendMessage(mixed ...$args){}
	/**
	 * @param \Avalonia\DesignerSupport\Remote\HtmlTransport\FrameType $type
	 * @param \System\Byte[] $data
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SendFrame($type, $data, $offset, $length){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadFrame(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function ReceiveMessage(){}
	/**
	 * @uses SimpleWebSocketMethodsOverride::ReadExact_1 ($from, $to, $length)
	 * @uses SimpleWebSocketMethodsOverride::ReadExact_2 ($from, $to, $offset, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExact(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
