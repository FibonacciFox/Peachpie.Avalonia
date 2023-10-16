<?php
namespace System\Reflection;
/**
 */
class StrongNameKeyPair extends \System\Object implements 
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public readonly $PublicKey;
	/**
	 * @return \System\Byte[]
	 */
	public  function get_PublicKey(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialization($sender){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
