<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnSystemDialogs
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindow $parentWindowHandle
	 * @param \Avalonia\Native\Interop\IAvnSystemDialogEvents $events
	 * @param \System\Int32|int $allowMultiple
	 * @param \System\String|string $title
	 * @param \System\String|string $initialPath
	 */
	public function SelectFolderDialog($parentWindowHandle, $events, $allowMultiple, $title, $initialPath);
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindow $parentWindowHandle
	 * @param \Avalonia\Native\Interop\IAvnSystemDialogEvents $events
	 * @param \System\Int32|int $allowMultiple
	 * @param \System\String|string $title
	 * @param \System\String|string $initialDirectory
	 * @param \System\String|string $initialFile
	 * @param \System\String|string $filters
	 */
	public function OpenFileDialog($parentWindowHandle, $events, $allowMultiple, $title, $initialDirectory, $initialFile, $filters);
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindow $parentWindowHandle
	 * @param \Avalonia\Native\Interop\IAvnSystemDialogEvents $events
	 * @param \System\String|string $title
	 * @param \System\String|string $initialDirectory
	 * @param \System\String|string $initialFile
	 * @param \System\String|string $filters
	 */
	public function SaveFileDialog($parentWindowHandle, $events, $title, $initialDirectory, $initialFile, $filters);
}
