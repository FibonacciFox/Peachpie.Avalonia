<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIFileOpenDialogProxyMethodsOverride
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
class __MicroComIFileOpenDialogProxy extends \Avalonia\Win32\Win32Com\Impl\__MicroComIFileDialogProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\Win32Com\IModalWindow,
	\Avalonia\Win32\Win32Com\IFileDialog,
	\Avalonia\Win32\Win32Com\IFileOpenDialog
{
	/**
	 * @return \Avalonia\Win32\Win32Com\IShellItemArray
	 */
	public  function get_Results(){}
	/**
	 * @return \Avalonia\Win32\Win32Com\IShellItemArray
	 */
	public  function get_SelectedItems(){}
	/**
	 * @uses __MicroComIFileOpenDialogProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIFileOpenDialogProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIFileOpenDialogProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIFileOpenDialogProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
