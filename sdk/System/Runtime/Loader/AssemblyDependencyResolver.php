<?php
namespace System\Runtime\Loader;
/**
 */
class AssemblyDependencyResolver extends \System\Object
{
	/**
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @return \System\String|string
	 */
	public  function ResolveAssemblyToPath($assemblyName){}
	/**
	 * @param \System\String|string $unmanagedDllName
	 * @return \System\String|string
	 */
	public  function ResolveUnmanagedDllToPath($unmanagedDllName){}
	/**
	 * @param \System\String|string $pathsList
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SplitPathsList($pathsList){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
