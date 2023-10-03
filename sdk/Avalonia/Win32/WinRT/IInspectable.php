<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IInspectable
{
	/**
	 * @param \System\UInt64* $iidCount
	 * @param \System\Guid** $iids
	 */
	public function GetIids($iidCount, $iids);
	/**
	 */
	public function get_RuntimeClassName();
	/**
	 */
	public function get_TrustLevel();
}
