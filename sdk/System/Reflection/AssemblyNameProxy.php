<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AssemblyNameProxyMethodsOverride
{
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class AssemblyNameProxy extends \System\MarshalByRefObject
{
	/**
	 * @param \System\String|string $assemblyFile
	 * @return \System\Reflection\AssemblyName
	 */
	public  function GetAssemblyName($assemblyFile){}
	/**
	 * @uses AssemblyNameProxyMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses AssemblyNameProxyMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
