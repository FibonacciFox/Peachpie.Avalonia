<?php
namespace System\Runtime\Serialization;
/**
 */
interface ISafeSerializationData
{
	/**
	 * @param \System\Object|object $deserialized
	 */
	public function CompleteDeserialization($deserialized);
}
