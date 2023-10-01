<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnSystemDialogsVTableMethodsOverride
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
class __MicroComIAvnSystemDialogsVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $parentWindowHandle
	 * @param \System\Void* $events
	 * @param \System\Int32|int $allowMultiple
	 * @param \System\Byte* $title
	 * @param \System\Byte* $initialPath
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SelectFolderDialog($this, $parentWindowHandle, $events, $allowMultiple, $title, $initialPath){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $parentWindowHandle
	 * @param \System\Void* $events
	 * @param \System\Int32|int $allowMultiple
	 * @param \System\Byte* $title
	 * @param \System\Byte* $initialDirectory
	 * @param \System\Byte* $initialFile
	 * @param \System\Byte* $filters
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenFileDialog($this, $parentWindowHandle, $events, $allowMultiple, $title, $initialDirectory, $initialFile, $filters){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $parentWindowHandle
	 * @param \System\Void* $events
	 * @param \System\Byte* $title
	 * @param \System\Byte* $initialDirectory
	 * @param \System\Byte* $initialFile
	 * @param \System\Byte* $filters
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SaveFileDialog($this, $parentWindowHandle, $events, $title, $initialDirectory, $initialFile, $filters){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnSystemDialogsVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnSystemDialogsVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
