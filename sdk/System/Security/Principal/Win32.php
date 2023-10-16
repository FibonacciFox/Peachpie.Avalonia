<?php
namespace System\Security\Principal;
/**
 */
class Win32 extends \System\Object
{
	/**
	 * @param \System\Security\Principal\TokenAccessLevels $dwDesiredAccess
	 * @param \System\Security\Principal\WinSecurityContext $dwOpenAs
	 * @param \Microsoft\Win32\SafeHandles\SafeTokenHandle& $phThreadToken
	 * @return \System\Int32|int
	 */
	protected static function OpenThreadToken($dwDesiredAccess, $dwOpenAs, $phThreadToken){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeTokenHandle $hToken
	 * @return \System\Int32|int
	 */
	protected static function SetThreadToken($hToken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
