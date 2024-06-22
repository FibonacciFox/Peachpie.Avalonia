<?php
namespace System\Threading;
final class NativeOverlapped extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $InternalLow;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $InternalHigh;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $OffsetLow;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $OffsetHigh;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $EventHandle;

}