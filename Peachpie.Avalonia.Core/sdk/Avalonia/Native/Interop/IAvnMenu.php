<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnMenu
{
	/**
	 */
	public function RaiseNeedsUpdate();
	/**
	 */
	public function RaiseOpening();
	/**
	 */
	public function RaiseClosed();
	/**
	 */
	public function Deinitialise();
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Native\Interop\IAvnMenuItem $item
	 */
	public function InsertItem($index, $item);
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenuItem $item
	 */
	public function RemoveItem($item);
	/**
	 * @param \System\String|string $utf8String
	 */
	public function SetTitle($utf8String);
	/**
	 */
	public function Clear();
}
