<?php
namespace System\Runtime\Serialization;
/**
 */
class SafeSerializationEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Runtime\Serialization\StreamingContext
	 * @property
	 */
	public readonly $StreamingContext;
	/**
	 * @param \System\Runtime\Serialization\ISafeSerializationData $serializedState
	 * @return \System\Void|void
	 */
	public  function AddSerializedState($serializedState){}
	/**
	 * @return \System\Runtime\Serialization\StreamingContext
	 */
	public  function get_StreamingContext(){}
}
