<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIFileDialogVTableMethodsOverride
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
class __MicroComIFileDialogVTable extends \Avalonia\Win32\Win32Com\Impl\__MicroComIModalWindowVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $cFileTypes
	 * @param \System\Void* $rgFilterSpec
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetFileTypes($this, $cFileTypes, $rgFilterSpec){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $iFileType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetFileTypeIndex($this, $iFileType){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16* $piFileType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFileTypeIndex($this, $piFileType){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pfde
	 * @param \System\Int32* $pdwCookie
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Advise($this, $pfde, $pdwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $dwCookie
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Unadvise($this, $dwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Win32Com\FILEOPENDIALOGOPTIONS $fos
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetOptions($this, $fos){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Win32Com\FILEOPENDIALOGOPTIONS* $pfos
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetOptions($this, $pfos){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $psi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetDefaultFolder($this, $psi){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $psi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetFolder($this, $psi){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppsi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFolder($this, $ppsi){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppsi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCurrentSelection($this, $ppsi){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Char* $pszName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetFileName($this, $pszName){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Char** $pszName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFileName($this, $pszName){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Char* $pszTitle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetTitle($this, $pszTitle){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Char* $pszText
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetOkButtonLabel($this, $pszText){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Char* $pszLabel
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetFileNameLabel($this, $pszLabel){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppsi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetResult($this, $ppsi){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $psi
	 * @param \System\Int32|int $fdap
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddPlace($this, $psi, $fdap){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Char* $pszDefaultExtension
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetDefaultExtension($this, $pszDefaultExtension){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $hr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Close($this, $hr){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $guid
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetClientGuid($this, $guid){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ClearClientData($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pFilter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetFilter($this, $pFilter){}
	/**
	 * @uses __MicroComIFileDialogVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIFileDialogVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
