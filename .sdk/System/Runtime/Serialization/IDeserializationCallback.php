<?php
namespace System\Runtime\Serialization;
interface IDeserializationCallback
{


	/**
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	public function OnDeserialization($sender);
}