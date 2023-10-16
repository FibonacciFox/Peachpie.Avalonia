<?php
namespace System\StubHelpers;
/**
 */
class DateMarshaler extends \System\Object
{
	/**
	 * @param \System\DateTime $managedDate
	 * @return \System\Double|double
	 */
	protected static function ConvertToNative($managedDate){}
	/**
	 * @param \System\Double|double $nativeDate
	 * @return \System\Int64|int
	 */
	protected static function ConvertToManaged($nativeDate){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
