<?php
namespace Avalonia\Native;
/**
 */
class Extensions extends \System\Object
{
	/**
	 * @param \System\Boolean $b
	 * @return \System\Int32|int
	 */
	public static function AsComBool($b){}
	/**
	 * @param \System\Int32|int $b
	 * @return \System\Boolean
	 */
	public static function FromComBool($b){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
