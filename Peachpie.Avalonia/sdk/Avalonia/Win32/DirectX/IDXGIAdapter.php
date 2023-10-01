<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIAdapter
{
	/**
	 * @param \System\UInt16 $Output
	 * @param \System\Void* $ppOutput
	 */
	public function EnumOutputs($Output, $ppOutput);
	/**
	 */
	public function get_Desc();
	/**
	 * @param \System\Guid* $InterfaceName
	 */
	public function CheckInterfaceSupport($InterfaceName);
}
