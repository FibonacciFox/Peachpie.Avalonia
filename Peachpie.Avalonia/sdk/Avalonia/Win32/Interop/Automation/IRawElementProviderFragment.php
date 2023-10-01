<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IRawElementProviderFragment
{
	/**
	 * @param \Avalonia\Win32\Interop\Automation\NavigateDirection $direction
	 */
	public function Navigate($direction);
	/**
	 */
	public function GetRuntimeId();
	/**
	 */
	public function get_BoundingRectangle();
	/**
	 */
	public function GetEmbeddedFragmentRoots();
	/**
	 */
	public function SetFocus();
	/**
	 */
	public function get_FragmentRoot();
}
