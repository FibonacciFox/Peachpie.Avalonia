<?php
namespace System\Runtime\Loader;
final class IndividualAssemblyLoadContext extends \System\Runtime\Loader\AssemblyLoadContext
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

}