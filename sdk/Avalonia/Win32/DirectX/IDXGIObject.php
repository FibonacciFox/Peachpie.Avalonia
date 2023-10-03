<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIObject
{
	/**
	 * @param \System\Guid* $Name
	 * @param \System\UInt16 $DataSize
	 * @param \System\Void** $pData
	 */
	public function SetPrivateData($Name, $DataSize, $pData);
	/**
	 * @param \System\Guid* $Name
	 * @param \MicroCom\Runtime\IUnknown $pUnknown
	 */
	public function SetPrivateDataInterface($Name, $pUnknown);
	/**
	 * @param \System\Guid* $Name
	 * @param \System\UInt16* $pDataSize
	 */
	public function GetPrivateData($Name, $pDataSize);
	/**
	 * @param \System\Guid* $riid
	 */
	public function GetParent($riid);
}
