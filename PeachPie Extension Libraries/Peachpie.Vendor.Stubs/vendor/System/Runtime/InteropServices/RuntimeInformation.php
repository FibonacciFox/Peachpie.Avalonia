<?php
namespace System\Runtime\InteropServices;
class RuntimeInformation extends \System\Object
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FrameworkDescription;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $RuntimeIdentifier;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\Architecture
	 * @since readonly
	 */
	public $ProcessArchitecture;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $OSDescription;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\Architecture
	 * @since readonly
	 */
	public $OSArchitecture;
	/**
	 * @param \System\Runtime\InteropServices\OSPlatform $osPlatform
	 * @return \System\Boolean|bool
	 */
	public static function IsOSPlatform($osPlatform){}
}