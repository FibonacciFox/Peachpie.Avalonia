<?php
namespace System\Runtime\Serialization;
interface ISafeSerializationData
{

	/**
	 * @param \System\Object|object $deserialized
	 * @return \System\Void|void
	 */
	public function CompleteDeserialization($deserialized);
}