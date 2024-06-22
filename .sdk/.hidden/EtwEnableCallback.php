<?php

final class EtwEnableCallback extends \System\MulticastDelegate implements
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{

	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $_target;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $_methodBase;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $_methodPtr;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $_methodPtrAux;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $Method;
	/**
	 * @param \System\Guid* $sourceId
	 * @param \System\Int32|int $isEnabled
	 * @param \System\Byte $level
	 * @param \System\Int64|int $matchAnyKeywords
	 * @param \System\Int64|int $matchAllKeywords
	 * @param \Interop+Advapi32+EVENT_FILTER_DESCRIPTOR* $filterData
	 * @param \System\Void* $callbackContext
	 * @return \System\Void|void
	 */
	public function Invoke($sourceId, $isEnabled, $level, $matchAnyKeywords, $matchAllKeywords, $filterData, $callbackContext){}
	/**
	 * @param \System\Object|object $object
	 * @param \System\IntPtr $method
	 */
	public function __construct($object, $method){}
}