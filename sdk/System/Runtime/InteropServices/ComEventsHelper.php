<?php
namespace System\Runtime\InteropServices;
/**
 */
class ComEventsHelper extends \System\Object
{
	/**
	 * @param \System\Object|object $rcw
	 * @param \System\Guid $iid
	 * @param \System\Int32|int $dispid
	 * @param \System\Delegate $d
	 * @return \System\Void|void
	 */
	public static function Combine($rcw, $iid, $dispid, $d){}
	/**
	 * @param \System\Object|object $rcw
	 * @param \System\Guid $iid
	 * @param \System\Int32|int $dispid
	 * @param \System\Delegate $d
	 * @return \System\Delegate
	 */
	public static function Remove($rcw, $iid, $dispid, $d){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
