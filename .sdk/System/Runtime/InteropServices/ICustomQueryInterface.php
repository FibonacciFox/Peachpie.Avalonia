<?php
namespace System\Runtime\InteropServices;
interface ICustomQueryInterface
{

	/**
	 * @param \System\Guid& &$iid
	 * @param \System\IntPtr& &$ppv
	 * @return \System\Runtime\InteropServices\CustomQueryInterfaceResult
	 */
	public function GetInterface(&$iid, &$ppv);
}