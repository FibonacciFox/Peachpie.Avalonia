<?php
namespace Internal\Runtime\InteropServices;
final class IsolatedComponentLoadContext extends \System\Runtime\Loader\AssemblyLoadContext
{

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
	/**
	 * @param \System\String|string $componentAssemblyPath
	 */
	public function __construct($componentAssemblyPath){}
}