<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDataObjectProxyMethodsOverride
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
class __MicroComIDataObjectProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\Win32Com\IDataObject
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
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetcIn
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @return \System\UInt32
	 */
	public  function GetData($pformatetcIn, $pmedium){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @return \System\UInt32
	 */
	public  function GetDataHere($pformatetc, $pmedium){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @return \System\UInt32
	 */
	public  function QueryGetData($pformatetc){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatectIn
	 * @return \Avalonia\Win32\Interop\FORMATETC
	 */
	public  function GetCanonicalFormatEtc($pformatectIn){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @param \System\Int32|int $fRelease
	 * @return \System\UInt32
	 */
	public  function SetData($pformatetc, $pmedium, $fRelease){}
	/**
	 * @param \System\Int32|int $dwDirection
	 * @return \Avalonia\Win32\Win32Com\IEnumFORMATETC
	 */
	public  function EnumFormatEtc($dwDirection){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \System\Int32|int $advf
	 * @param \System\Void* $pAdvSink
	 * @return \System\Int32|int
	 */
	public  function DAdvise($pformatetc, $advf, $pAdvSink){}
	/**
	 * @param \System\Int32|int $dwConnection
	 * @return \System\Void|void
	 */
	public  function DUnadvise($dwConnection){}
	/**
	 * @return \System\Void*
	 */
	public  function EnumDAdvise(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIDataObjectProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDataObjectProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDataObjectProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDataObjectProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
