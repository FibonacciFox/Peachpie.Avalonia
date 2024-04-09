<?php
namespace Microsoft\Win32\SafeHandles;
class CriticalHandleZeroOrMinusOneIsInvalid extends \System\Runtime\InteropServices\CriticalHandle implements
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