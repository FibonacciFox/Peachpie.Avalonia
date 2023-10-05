<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnClipboardProxyMethodsOverride
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
class __MicroComIAvnClipboardProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnClipboard
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NativePointer;
	/**
	 * @var \System\Void***
	 * @property
	 */
	public readonly $PPV;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $OwnsHandle;
	/**
	 * @param \System\String|string $type
	 * @return \Avalonia\Native\Interop\IAvnString
	 */
	public  function GetText($type){}
	/**
	 * @param \System\String|string $type
	 * @param \System\String|string $utf8Text
	 * @return \System\Void|void
	 */
	public  function SetText($type, $utf8Text){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnStringArray
	 */
	public  function ObtainFormats(){}
	/**
	 * @param \System\String|string $type
	 * @return \Avalonia\Native\Interop\IAvnStringArray
	 */
	public  function GetStrings($type){}
	/**
	 * @param \System\String|string $type
	 * @param \System\Void* $utf8Text
	 * @param \System\Int32|int $len
	 * @return \System\Void|void
	 */
	public  function SetBytes($type, $utf8Text, $len){}
	/**
	 * @param \System\String|string $type
	 * @return \Avalonia\Native\Interop\IAvnString
	 */
	public  function GetBytes($type){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnClipboardProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnClipboardProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnClipboardProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnClipboardProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
