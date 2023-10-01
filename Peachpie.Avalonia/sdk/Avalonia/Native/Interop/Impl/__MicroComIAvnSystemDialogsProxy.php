<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnSystemDialogsProxyMethodsOverride
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
class __MicroComIAvnSystemDialogsProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnSystemDialogs
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindow $parentWindowHandle
	 * @param \Avalonia\Native\Interop\IAvnSystemDialogEvents $events
	 * @param \System\Int32|int $allowMultiple
	 * @param \System\String|string $title
	 * @param \System\String|string $initialPath
	 * @return \System\Void|void
	 */
	public  function SelectFolderDialog($parentWindowHandle, $events, $allowMultiple, $title, $initialPath){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindow $parentWindowHandle
	 * @param \Avalonia\Native\Interop\IAvnSystemDialogEvents $events
	 * @param \System\Int32|int $allowMultiple
	 * @param \System\String|string $title
	 * @param \System\String|string $initialDirectory
	 * @param \System\String|string $initialFile
	 * @param \System\String|string $filters
	 * @return \System\Void|void
	 */
	public  function OpenFileDialog($parentWindowHandle, $events, $allowMultiple, $title, $initialDirectory, $initialFile, $filters){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindow $parentWindowHandle
	 * @param \Avalonia\Native\Interop\IAvnSystemDialogEvents $events
	 * @param \System\String|string $title
	 * @param \System\String|string $initialDirectory
	 * @param \System\String|string $initialFile
	 * @param \System\String|string $filters
	 * @return \System\Void|void
	 */
	public  function SaveFileDialog($parentWindowHandle, $events, $title, $initialDirectory, $initialFile, $filters){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnSystemDialogsProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnSystemDialogsProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnSystemDialogsProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnSystemDialogsProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
