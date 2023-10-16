<?php
namespace System\Runtime\InteropServices;
/**
 */
class ComEventsInfo extends \System\Object
{
	/**
	 * @param \System\Object|object $rcw
	 * @return \System\Runtime\InteropServices\ComEventsInfo
	 */
	public static function Find($rcw){}
	/**
	 * @param \System\Object|object $rcw
	 * @return \System\Runtime\InteropServices\ComEventsInfo
	 */
	public static function FromObject($rcw){}
	/**
	 * @param \System\Guid& $iid
	 * @return \System\Runtime\InteropServices\ComEventsSink
	 */
	public  function FindSink($iid){}
	/**
	 * @param \System\Guid& $iid
	 * @return \System\Runtime\InteropServices\ComEventsSink
	 */
	public  function AddSink($iid){}
	/**
	 * @param \System\Runtime\InteropServices\ComEventsSink $sink
	 * @return \System\Runtime\InteropServices\ComEventsSink
	 */
	protected  function RemoveSink($sink){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
