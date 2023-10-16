<?php
namespace System\Resources;
/**
 */
class NeutralResourcesLanguageAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $CultureName;
	/**
	 * @var \System\Resources\UltimateResourceFallbackLocation
	 * @property
	 */
	public readonly $Location;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_CultureName(){}
	/**
	 * @return \System\Resources\UltimateResourceFallbackLocation
	 */
	public  function get_Location(){}
}
