<?php
namespace System\Security;
/**
 */
class SecureStringMarshal extends \System\Object
{
	/**
	 * @param \System\Security\SecureString $s
	 * @return \System\IntPtr
	 */
	public static function SecureStringToCoTaskMemAnsi($s){}
	/**
	 * @param \System\Security\SecureString $s
	 * @return \System\IntPtr
	 */
	public static function SecureStringToGlobalAllocAnsi($s){}
	/**
	 * @param \System\Security\SecureString $s
	 * @return \System\IntPtr
	 */
	public static function SecureStringToCoTaskMemUnicode($s){}
	/**
	 * @param \System\Security\SecureString $s
	 * @return \System\IntPtr
	 */
	public static function SecureStringToGlobalAllocUnicode($s){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
