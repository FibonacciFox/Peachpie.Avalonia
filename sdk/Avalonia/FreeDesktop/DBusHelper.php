<?php
namespace Avalonia\FreeDesktop;
/**
 */
class DBusHelper extends \System\Object
{
	/**
	 * @var \Tmds\DBus\Protocol\Connection
	 * @property
	 */
	public $Connection;
	/**
	 * @return \Tmds\DBus\Protocol\Connection
	 */
	public static function get_Connection(){}
	/**
	 * @param \Tmds\DBus\Protocol\Connection $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function set_Connection($value){}
	/**
	 * @param \System\String|string $dbusAddress
	 * @return \Tmds\DBus\Protocol\Connection
	 */
	public static function TryInitialize($dbusAddress){}
	/**
	 * @param \System\String|string $dbusAddress
	 * @return \Tmds\DBus\Protocol\Connection
	 */
	public static function TryCreateNewConnection($dbusAddress){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
