<?php
namespace System;
final class DispatchState extends \System\ValueType
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte[]
	 */
	public $StackTrace;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object[]|array
	 */
	public $DynamicMethods;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public $RemoteStackTrace;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UIntPtr
	 */
	public $IpForWatsonBuckets;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte[]
	 */
	public $WatsonBuckets;
	/**
	 * @param \System\Byte $stackTrace
	 * @param \System\Object $dynamicMethods
	 * @param \System\String|string $remoteStackTrace
	 * @param \System\UIntPtr $ipForWatsonBuckets
	 * @param \System\Byte $watsonBuckets
	 */
	public function __construct($stackTrace, $dynamicMethods, $remoteStackTrace, $ipForWatsonBuckets, $watsonBuckets){}
}