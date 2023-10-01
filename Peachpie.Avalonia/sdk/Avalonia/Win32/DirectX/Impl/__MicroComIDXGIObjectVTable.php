<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIObjectVTableMethodsOverride
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
class __MicroComIDXGIObjectVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $Name
	 * @param \System\UInt16 $DataSize
	 * @param \System\Void** $pData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetPrivateData($this, $Name, $DataSize, $pData){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $Name
	 * @param \System\Void* $pUnknown
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetPrivateDataInterface($this, $Name, $pUnknown){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $Name
	 * @param \System\UInt16* $pDataSize
	 * @param \System\Void** $pData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPrivateData($this, $Name, $pDataSize, $pData){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppParent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetParent($this, $riid, $ppParent){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIDXGIObjectVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIObjectVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
