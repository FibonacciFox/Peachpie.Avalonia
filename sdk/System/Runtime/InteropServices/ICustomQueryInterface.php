<?php
namespace System\Runtime\InteropServices;
/**
 */
interface ICustomQueryInterface
{
	/**
	 * @param \System\Guid& $iid
	 * @param \System\IntPtr& $ppv
	 */
	public function GetInterface($iid, $ppv);
}
