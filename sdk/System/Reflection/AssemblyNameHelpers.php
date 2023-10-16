<?php
namespace System\Reflection;
/**
 */
class AssemblyNameHelpers extends \System\Object
{
	/**
	 * @param \System\Byte[] $publicKey
	 * @return \System\Byte[]
	 */
	public static function ComputePublicKeyToken($publicKey){}
	/**
	 * @param \System\Byte[] $publicKey
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidPublicKey($publicKey){}
	/**
	 * @param \System\UInt32 $x
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAlgClass($x){}
	/**
	 * @param \System\UInt32 $x
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAlgSid($x){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_EcmaKey(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
