<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IRawElementProviderSimple
{
	/**
	 */
	public function get_ProviderOptions();
	/**
	 * @param \System\Int32|int $patternId
	 */
	public function GetPatternProvider($patternId);
	/**
	 * @param \System\Int32|int $propertyId
	 */
	public function GetPropertyValue($propertyId);
	/**
	 */
	public function get_HostRawElementProvider();
}
