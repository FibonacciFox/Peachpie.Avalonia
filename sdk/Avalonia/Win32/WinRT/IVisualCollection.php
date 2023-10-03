<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IVisualCollection
{
	/**
	 */
	public function get_Count();
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $newChild
	 * @param \Avalonia\Win32\WinRT\IVisual $sibling
	 */
	public function InsertAbove($newChild, $sibling);
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $newChild
	 */
	public function InsertAtBottom($newChild);
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $newChild
	 */
	public function InsertAtTop($newChild);
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $newChild
	 * @param \Avalonia\Win32\WinRT\IVisual $sibling
	 */
	public function InsertBelow($newChild, $sibling);
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $child
	 */
	public function Remove($child);
	/**
	 */
	public function RemoveAll();
}
