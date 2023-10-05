<?php
namespace Avalonia\Win32\WinRT;
/**
 */
class DispatcherQueueOptions extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $dwSize;
	/**
	 * @var \Avalonia\Win32\WinRT\NativeWinRTMethods+DISPATCHERQUEUE_THREAD_TYPE
	 * @field
	 */
	public $threadType;
	/**
	 * @var \Avalonia\Win32\WinRT\NativeWinRTMethods+DISPATCHERQUEUE_THREAD_APARTMENTTYPE
	 * @field
	 */
	public $apartmentType;
}
