<?php
namespace Avalonia\FreeDesktop;
/**
 */
interface IX11InputMethodFactory
{
	/**
	 * @param \System\IntPtr $xid
	 */
	public function CreateClient($xid);
}
