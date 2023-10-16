<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class WeakReference_1 extends \System\Object implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $m_handle;
	/**
	 * @param \System\T $target
	 * @return \System\Void|void
	 */
	public  function SetTarget($target){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Target(){}
	/**
	 * @param \System\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Target($value){}
	/**
	 * @param \System\T $target
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
	 * @param \System\T& $target
	 * @return \System\Boolean
	 */
	public  function TryGetTarget($target){}
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
