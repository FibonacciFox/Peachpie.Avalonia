<?php
namespace System;
/**
 */
class UnitySerializationHolder extends \System\Object implements 
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IObjectReference
{
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Int32|int $unityType
	 * @return \System\Void|void
	 */
	protected static function GetUnitySerializationInfo($info, $unityType){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Object|object
	 */
	public  function GetRealObject($context){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
