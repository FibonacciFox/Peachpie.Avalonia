<?php
namespace System;
/**
 */
class DispatchState extends \System\ValueType
{
	/**
	 * @var \System\Byte[]
	 * @field
	 */
	public readonly $StackTrace;
	/**
	 * @var \System\Object[]
	 * @field
	 */
	public readonly $DynamicMethods;
	/**
	 * @var \System\String
	 * @field
	 */
	public readonly $RemoteStackTrace;
	/**
	 * @var \System\UIntPtr
	 * @field
	 */
	public readonly $IpForWatsonBuckets;
	/**
	 * @var \System\Byte[]
	 * @field
	 */
	public readonly $WatsonBuckets;
}
