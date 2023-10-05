<?php
namespace Avalonia\Platform\Internal;
/**
 */
class AssemblyDescriptor extends \System\Object implements 
	\Avalonia\Platform\Internal\IAssemblyDescriptor
{
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $Assembly;
	/**
	 * @var \System\Collections\Generic\Dictionary_2[System\String,Avalonia\Platform\Internal\IAssetDescriptor]
	 * @property
	 */
	public readonly $Resources;
	/**
	 * @var \System\Collections\Generic\Dictionary_2[System\String,Avalonia\Platform\Internal\IAssetDescriptor]
	 * @property
	 */
	public readonly $AvaloniaResources;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @return \System\Reflection\Assembly
	 */
	public  function get_Assembly(){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	public  function get_Resources(){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	public  function get_AvaloniaResources(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \Avalonia\Utilities\AvaloniaResourcesIndexEntry $r
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPathRooted($r){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
