<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IRawElementProviderFragmentRoot
{
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 */
	public function ElementProviderFromPoint($x, $y);
	/**
	 */
	public function GetFocus();
}
