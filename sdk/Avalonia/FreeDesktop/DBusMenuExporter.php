<?php
namespace Avalonia\FreeDesktop;
/**
 */
class DBusMenuExporter extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $GenerateDBusMenuObjPath;
	/**
	 * @param \System\IntPtr $xid
	 * @return \Avalonia\Controls\Platform\ITopLevelNativeMenuExporter
	 */
	public static function TryCreateTopLevelNativeMenu($xid){}
	/**
	 * @param \System\String|string $path
	 * @param \Tmds\DBus\Protocol\Connection $currentConnection
	 * @return \Avalonia\Controls\Platform\INativeMenuExporter
	 */
	public static function TryCreateDetachedNativeMenu($path, $currentConnection){}
	/**
	 * @return \System\String|string
	 */
	public static function get_GenerateDBusMenuObjPath(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
