<?php
namespace System\Runtime\Loader;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IndividualAssemblyLoadContextMethodsOverride
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
class IndividualAssemblyLoadContext extends \System\Runtime\Loader\AssemblyLoadContext
{
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
	 * @uses IndividualAssemblyLoadContextMethodsOverride::LoadFromStream_1 ($assembly)
	 * @uses IndividualAssemblyLoadContextMethodsOverride::LoadFromStream_2 ($assembly, $assemblySymbols)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadFromStream(mixed ...$args){}
	/**
	 * @return \System\Runtime\Loader\ContextualReflectionScope
	 */
	public  function EnterContextualReflection(){}
}
