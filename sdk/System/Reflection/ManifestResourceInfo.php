<?php
namespace System\Reflection;
/**
 */
class ManifestResourceInfo extends \System\Object
{
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $ReferencedAssembly;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FileName;
	/**
	 * @var \System\Reflection\ResourceLocation
	 * @property
	 */
	public readonly $ResourceLocation;
	/**
	 * @return \System\Reflection\Assembly
	 */
	public  function get_ReferencedAssembly(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FileName(){}
	/**
	 * @return \System\Reflection\ResourceLocation
	 */
	public  function get_ResourceLocation(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
