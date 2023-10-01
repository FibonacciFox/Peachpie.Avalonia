<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface ITextProvider
{
	/**
	 */
	public function GetSelection();
	/**
	 */
	public function GetVisibleRanges();
	/**
	 * @param \Avalonia\Win32\Interop\Automation\IRawElementProviderSimple $childElement
	 */
	public function RangeFromChild($childElement);
	/**
	 * @param \Avalonia\Point $screenLocation
	 */
	public function RangeFromPoint($screenLocation);
	/**
	 */
	public function get_DocumentRange();
	/**
	 */
	public function get_SupportedTextSelection();
}
