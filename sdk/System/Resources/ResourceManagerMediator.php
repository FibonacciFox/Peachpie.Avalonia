<?php
namespace System\Resources;
/**
 */
class ResourceManagerMediator extends \System\Object
{
	/**
	 * @return \System\String|string
	 */
	protected  function get_ModuleDir(){}
	/**
	 * @return \System\Type
	 */
	protected  function get_LocationInfo(){}
	/**
	 * @return \System\Type
	 */
	protected  function get_UserResourceSet(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_BaseNameField(){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	protected  function get_NeutralResourcesCulture(){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\String|string
	 */
	protected  function GetResourceFileName($culture){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_LookedForSatelliteContractVersion(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_LookedForSatelliteContractVersion($value){}
	/**
	 * @return \System\Version
	 */
	protected  function get_SatelliteContractVersion(){}
	/**
	 * @param \System\Version $value
	 * @return \System\Void|void
	 */
	protected  function set_SatelliteContractVersion($value){}
	/**
	 * @param \System\Reflection\Assembly $a
	 * @return \System\Version
	 */
	protected static function ObtainSatelliteContractVersion($a){}
	/**
	 * @return \System\Resources\UltimateResourceFallbackLocation
	 */
	protected  function get_FallbackLoc(){}
	/**
	 * @return \System\Reflection\Assembly
	 */
	protected  function get_MainAssembly(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_BaseName(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
