<?php
namespace Avalonia\Platform\Internal;
class AssemblyDescriptor extends \System\Object implements
	\Avalonia\Platform\Internal\IAssemblyDescriptor
{

	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $Assembly;
	/**
	 * @property
	 * @var \System\Collections\Generic\Dictionary_2[System\String,Avalonia\Platform\Internal\IAssetDescriptor]
	 * @since readonly
	 */
	public $Resources;
	/**
	 * @property
	 * @var \System\Collections\Generic\Dictionary_2[System\String,Avalonia\Platform\Internal\IAssetDescriptor]
	 * @since readonly
	 */
	public $AvaloniaResources;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	private static function GetPathRooted($r){}
	/**
	 * @param \System\Reflection\Assembly $assembly
	 */
	public function __construct($assembly){}
}