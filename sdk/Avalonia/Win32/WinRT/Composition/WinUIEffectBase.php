<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class WinUIEffectBase extends \Avalonia\Win32\WinRT\WinRTInspectable implements 
	\Avalonia\Win32\WinRT\IInspectable,
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\Avalonia\Win32\WinRT\IGraphicsEffect,
	\Avalonia\Win32\WinRT\IGraphicsEffectSource,
	\Avalonia\Win32\WinRT\IGraphicsEffectD2D1Interop
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $EffectId;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $PropertyCount;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $SourceCount;
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
	 * @return \System\IntPtr
	 */
	public  function get_Name(){}
	/**
	 * @param \System\IntPtr $name
	 * @return \System\Void|void
	 */
	public  function SetName($name){}
	/**
	 * @return \System\Guid
	 */
	public  function get_EffectId(){}
	/**
	 * @param \System\IntPtr $name
	 * @param \System\UInt32* $index
	 * @param \Avalonia\Win32\WinRT\GRAPHICS_EFFECT_PROPERTY_MAPPING* $mapping
	 * @return \System\Void|void
	 */
	public  function GetNamedPropertyMapping($name, $index, $mapping){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_PropertyCount(){}
	/**
	 * @param \System\UInt32 $index
	 * @return \Avalonia\Win32\WinRT\IPropertyValue
	 */
	public  function GetProperty($index){}
	/**
	 * @param \System\UInt32 $index
	 * @return \Avalonia\Win32\WinRT\IGraphicsEffectSource
	 */
	public  function GetSource($index){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_SourceCount(){}
}
