<?php
namespace Avalonia\Win32\Input;
/**
 */
class KeyInterop extends \System\Object
{
	/**
	 * @param \System\Int32|int $keyData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsExtended($keyData){}
	/**
	 * @param \System\Int32|int $virtualKey
	 * @param \System\Int32|int $keyData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetVirtualKey($virtualKey, $keyData){}
	/**
	 * @param \System\Int32|int $virtualKey
	 * @param \System\Int32|int $keyData
	 * @return \Avalonia\Input\Key
	 */
	public static function KeyFromVirtualKey($virtualKey, $keyData){}
	/**
	 * @param \Avalonia\Input\Key $key
	 * @return \System\Int32|int
	 */
	public static function VirtualKeyFromKey($key){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
