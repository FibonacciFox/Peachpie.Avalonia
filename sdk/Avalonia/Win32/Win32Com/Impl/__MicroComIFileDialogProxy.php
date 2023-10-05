<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIFileDialogProxyMethodsOverride
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
class __MicroComIFileDialogProxy extends \Avalonia\Win32\Win32Com\Impl\__MicroComIModalWindowProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\Win32Com\IModalWindow,
	\Avalonia\Win32\Win32Com\IFileDialog
{
	/**
	 * @var \System\UInt16
	 * @property
	 */
	public readonly $FileTypeIndex;
	/**
	 * @var \Avalonia\Win32\Win32Com\FILEOPENDIALOGOPTIONS
	 * @property
	 */
	public readonly $Options;
	/**
	 * @var \Avalonia\Win32\Win32Com\IShellItem
	 * @property
	 */
	public readonly $Folder;
	/**
	 * @var \Avalonia\Win32\Win32Com\IShellItem
	 * @property
	 */
	public readonly $CurrentSelection;
	/**
	 * @var \System\Char*
	 * @property
	 */
	public readonly $FileName;
	/**
	 * @var \Avalonia\Win32\Win32Com\IShellItem
	 * @property
	 */
	public readonly $Result;
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
	 * @param \System\UInt16 $cFileTypes
	 * @param \System\Void* $rgFilterSpec
	 * @return \System\Void|void
	 */
	public  function SetFileTypes($cFileTypes, $rgFilterSpec){}
	/**
	 * @param \System\UInt16 $iFileType
	 * @return \System\Void|void
	 */
	public  function SetFileTypeIndex($iFileType){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_FileTypeIndex(){}
	/**
	 * @param \System\Void* $pfde
	 * @return \System\Int32|int
	 */
	public  function Advise($pfde){}
	/**
	 * @param \System\Int32|int $dwCookie
	 * @return \System\Void|void
	 */
	public  function Unadvise($dwCookie){}
	/**
	 * @param \Avalonia\Win32\Win32Com\FILEOPENDIALOGOPTIONS $fos
	 * @return \System\Void|void
	 */
	public  function SetOptions($fos){}
	/**
	 * @return \Avalonia\Win32\Win32Com\FILEOPENDIALOGOPTIONS
	 */
	public  function get_Options(){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IShellItem $psi
	 * @return \System\Void|void
	 */
	public  function SetDefaultFolder($psi){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IShellItem $psi
	 * @return \System\Void|void
	 */
	public  function SetFolder($psi){}
	/**
	 * @return \Avalonia\Win32\Win32Com\IShellItem
	 */
	public  function get_Folder(){}
	/**
	 * @return \Avalonia\Win32\Win32Com\IShellItem
	 */
	public  function get_CurrentSelection(){}
	/**
	 * @param \System\Char* $pszName
	 * @return \System\Void|void
	 */
	public  function SetFileName($pszName){}
	/**
	 * @return \System\Char*
	 */
	public  function get_FileName(){}
	/**
	 * @param \System\Char* $pszTitle
	 * @return \System\Void|void
	 */
	public  function SetTitle($pszTitle){}
	/**
	 * @param \System\Char* $pszText
	 * @return \System\Void|void
	 */
	public  function SetOkButtonLabel($pszText){}
	/**
	 * @param \System\Char* $pszLabel
	 * @return \System\Void|void
	 */
	public  function SetFileNameLabel($pszLabel){}
	/**
	 * @return \Avalonia\Win32\Win32Com\IShellItem
	 */
	public  function get_Result(){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IShellItem $psi
	 * @param \System\Int32|int $fdap
	 * @return \System\Void|void
	 */
	public  function AddPlace($psi, $fdap){}
	/**
	 * @param \System\Char* $pszDefaultExtension
	 * @return \System\Void|void
	 */
	public  function SetDefaultExtension($pszDefaultExtension){}
	/**
	 * @param \System\Int32|int $hr
	 * @return \System\Void|void
	 */
	public  function Close($hr){}
	/**
	 * @param \System\Guid* $guid
	 * @return \System\Void|void
	 */
	public  function SetClientGuid($guid){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearClientData(){}
	/**
	 * @param \System\Void* $pFilter
	 * @return \System\Void|void
	 */
	public  function SetFilter($pFilter){}
	/**
	 * @uses __MicroComIFileDialogProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIFileDialogProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIFileDialogProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIFileDialogProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
