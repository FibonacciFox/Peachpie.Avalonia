<?php
namespace Microsoft\Win32\SafeHandles;
class SafeHandleZeroOrMinusOneIsInvalid extends \System\Runtime\InteropServices\SafeHandle implements
	\System\IDisposable
{
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $handle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInvalid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsClosed;

}