<?php
namespace System\Runtime\Loader;
final class DefaultAssemblyLoadContext extends \System\Runtime\Loader\AssemblyLoadContext
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Runtime\Loader\AssemblyLoadContext
	 */
	protected static $s_loadContext;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\Assembly]
	 * @since readonly
	 */
	public $Assemblies;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;

}