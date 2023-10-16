<?php
namespace System\Reflection;
/**
 */
class Missing extends \System\Object implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Reflection\Missing
	 * @field
	 */
	public readonly $Value;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
