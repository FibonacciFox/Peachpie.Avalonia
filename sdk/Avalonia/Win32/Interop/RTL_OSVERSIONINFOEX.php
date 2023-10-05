<?php
namespace Avalonia\Win32\Interop;
/**
 */
class RTL_OSVERSIONINFOEX extends \System\ValueType
{
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $dwOSVersionInfoSize;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $dwMajorVersion;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $dwMinorVersion;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $dwBuildNumber;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	protected $dwPlatformId;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $szCSDVersion;
}
