<?php
namespace System\Diagnostics\Tracing;
/**
 */
class TraceLoggingEventHandleTable extends \System\Object
{
	/**
	 * @param \System\Int32|int $eventID
	 * @return \System\IntPtr
	 */
	protected  function get_Item($eventID){}
	/**
	 * @param \System\Int32|int $eventID
	 * @param \System\IntPtr $eventHandle
	 * @return \System\Void|void
	 */
	protected  function SetEventHandle($eventID, $eventHandle){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
