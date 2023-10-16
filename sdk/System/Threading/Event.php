<?php
namespace System\Threading;
/**
 */
class Event extends \System\ValueType
{
	/**
	 * @var \System\Threading\NativeOverlapped*
	 * @field
	 */
	public readonly $nativeOverlapped;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public readonly $bytesTransferred;
}
