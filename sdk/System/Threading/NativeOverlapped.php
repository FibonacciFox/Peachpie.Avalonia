<?php
namespace System\Threading;
/**
 */
class NativeOverlapped extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $InternalLow;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $InternalHigh;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $OffsetLow;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $OffsetHigh;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $EventHandle;
}
