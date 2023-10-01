<?php
namespace Avalonia\DesignerSupport\Remote\HtmlTransport;
/**
 */
class SimpleWebSocketHttpRequest extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	public  function get_Headers(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Path(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsWebsocketRequest(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_WebSocketProtocols(){}
	/**
	 * @param \System\Int32|int $code
	 * @param \System\Byte[] $data
	 * @param \System\String|string $contentType
	 * @return \System\Threading\Tasks\Task
	 */
	public  function RespondAsync($code, $data, $contentType){}
	/**
	 * @param \System\String|string $protocol
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function AcceptWebSocket($protocol){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
