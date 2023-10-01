<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIGraphicsEffectD2D1InteropProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComIGraphicsEffectD2D1InteropProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IGraphicsEffectD2D1Interop
{
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
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIGraphicsEffectD2D1InteropProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIGraphicsEffectD2D1InteropProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIGraphicsEffectD2D1InteropProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIGraphicsEffectD2D1InteropProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
