<?php
namespace Avalonia\Win32\WinRT;
/**
 */
class WinRTInspectable extends \System\Object implements 
	\Avalonia\Win32\WinRT\IInspectable,
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $RuntimeClassName;
	/**
	 * @var \Avalonia\Win32\WinRT\TrustLevel
	 * @property
	 */
	public readonly $TrustLevel;
	/**
	 * @var \MicroCom\Runtime\MicroComShadow
	 * @property
	 */
	public $Shadow;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\UInt64* $iidCount
	 * @param \System\Guid** $iids
	 * @return \System\Void|void
	 */
	public  function GetIids($iidCount, $iids){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_RuntimeClassName(){}
	/**
	 * @return \Avalonia\Win32\WinRT\TrustLevel
	 */
	public  function get_TrustLevel(){}
	/**
	 * @return \MicroCom\Runtime\MicroComShadow
	 */
	public  function get_Shadow(){}
	/**
	 * @param \MicroCom\Runtime\MicroComShadow $value
	 * @return \System\Void|void
	 */
	public  function set_Shadow($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnReferencedFromNative(){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnUnreferencedFromNative(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
