<?php
namespace System\Runtime\Serialization;
/**
 */
interface IDeserializationCallback
{
	/**
	 * @param \System\Object|object $sender
	 */
	public function OnDeserialization($sender);
}
