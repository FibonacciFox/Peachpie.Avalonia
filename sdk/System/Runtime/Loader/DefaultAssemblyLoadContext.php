<?php
namespace System\Runtime\Loader;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DefaultAssemblyLoadContextMethodsOverride
{
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function LoadFromStream_1($assembly){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	#[MethodOverride] public  function LoadFromStream_2($assembly, $assemblySymbols){}
}
/**
 */
class DefaultAssemblyLoadContext extends \System\Runtime\Loader\AssemblyLoadContext
{
	/**
	 * @var \System\Runtime\Loader\AssemblyLoadContext
	 * @field
	 */
	protected readonly $s_loadContext;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\Assembly]
	 * @property
	 */
	public readonly $Assemblies;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @uses DefaultAssemblyLoadContextMethodsOverride::LoadFromStream_1 ($assembly)
	 * @uses DefaultAssemblyLoadContextMethodsOverride::LoadFromStream_2 ($assembly, $assemblySymbols)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadFromStream(mixed ...$args){}
	/**
	 * @return \System\Runtime\Loader\ContextualReflectionScope
	 */
	public  function EnterContextualReflection(){}
}
