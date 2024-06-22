<?php
namespace System\Runtime\Serialization;
final class SafeSerializationEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \System\Runtime\Serialization\StreamingContext
	 * @since readonly
	 */
	public $StreamingContext;
	/**
	 * @param \System\Runtime\Serialization\ISafeSerializationData $serializedState
	 * @return \System\Void|void
	 */
	public function AddSerializedState($serializedState){}
}