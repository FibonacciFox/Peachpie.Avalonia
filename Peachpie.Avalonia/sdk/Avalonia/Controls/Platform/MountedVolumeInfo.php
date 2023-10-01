<?php
namespace Avalonia\Controls\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MountedVolumeInfoMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class MountedVolumeInfo extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\String|string
	 */
	public  function get_VolumeLabel(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_VolumeLabel($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_VolumePath(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_VolumePath($value){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_VolumeSizeBytes(){}
	/**
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public  function set_VolumeSizeBytes($value){}
	/**
	 * @uses MountedVolumeInfoMethodsOverride::Equals_1 ($other)
	 * @uses MountedVolumeInfoMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
