<?php
namespace System\Runtime\Loader;
final class AssemblyDependencyResolver extends \System\Object
{


	/**
	 * @param \System\Reflection\AssemblyName $assemblyName
	 * @return \System\String|string
	 */
	public function ResolveAssemblyToPath($assemblyName){}
	/**
	 * @param \System\String|string $unmanagedDllName
	 * @return \System\String|string
	 */
	public function ResolveUnmanagedDllToPath($unmanagedDllName){}
	private static function SplitPathsList($pathsList){}
	/**
	 * @param \System\String|string $componentAssemblyPath
	 */
	public function __construct($componentAssemblyPath){}
}