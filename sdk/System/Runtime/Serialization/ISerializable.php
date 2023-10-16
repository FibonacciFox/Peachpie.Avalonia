<?php
namespace System\Runtime\Serialization;
/**
 */
interface ISerializable
{
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 */
	public function GetObjectData($info, $context);
}
