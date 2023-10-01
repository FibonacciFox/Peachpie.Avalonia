<?php
namespace Avalonia\Win32\Win32Com;
/**
 */
interface IDropTarget
{
	/**
	 * @param \Avalonia\Win32\Win32Com\IDataObject $pDataObj
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 */
	public function DragEnter($pDataObj, $grfKeyState, $pt, $pdwEffect);
	/**
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 */
	public function DragOver($grfKeyState, $pt, $pdwEffect);
	/**
	 */
	public function DragLeave();
	/**
	 * @param \Avalonia\Win32\Win32Com\IDataObject $pDataObj
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 */
	public function Drop($pDataObj, $grfKeyState, $pt, $pdwEffect);
}
