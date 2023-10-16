<?php
namespace System;
/**
 */
class WeakReference extends \System\Object implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $m_handle;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAlive;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $TrackResurrection;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Target;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAlive(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_TrackResurrection(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Target(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Target($value){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Boolean $trackResurrection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Create($target, $trackResurrection){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsTrackResurrection(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
