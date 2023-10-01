<?php
namespace Avalonia\Win32\Win32Com;
/**
 */
interface IEnumFORMATETC
{
	/**
	 * @param \System\UInt32 $celt
	 * @param \Avalonia\Win32\Interop\FORMATETC* $rgelt
	 * @param \System\UInt32* $pceltFetched
	 */
	public function Next($celt, $rgelt, $pceltFetched);
	/**
	 * @param \System\UInt32 $celt
	 */
	public function Skip($celt);
	/**
	 */
	public function Reset();
	/**
	 */
	public function Clone();
}
