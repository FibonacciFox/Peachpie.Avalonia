<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDataObjectVTableMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_1($d){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_2($m){}
}
/**
 */
class __MicroComIDataObjectVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetcIn
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetData($this, $pformatetcIn, $pmedium){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDataHere($this, $pformatetc, $pmedium){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QueryGetData($this, $pformatetc){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatectIn
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetcOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCanonicalFormatEtc($this, $pformatectIn, $pformatetcOut){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @param \System\Int32|int $fRelease
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetData($this, $pformatetc, $pmedium, $fRelease){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $dwDirection
	 * @param \System\Void** $ppenumFormatEtc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumFormatEtc($this, $dwDirection, $ppenumFormatEtc){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \System\Int32|int $advf
	 * @param \System\Void* $pAdvSink
	 * @param \System\Int32* $pdwConnection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DAdvise($this, $pformatetc, $advf, $pAdvSink, $pdwConnection){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $dwConnection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DUnadvise($this, $dwConnection){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppenumAdvise
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumDAdvise($this, $ppenumAdvise){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIDataObjectVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDataObjectVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
