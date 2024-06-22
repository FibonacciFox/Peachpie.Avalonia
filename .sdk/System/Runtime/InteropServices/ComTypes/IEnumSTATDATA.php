<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IEnumSTATDATA
{


	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Runtime\InteropServices\ComTypes\STATDATA &$rgelt
	 * @param \System\Int32 &$pceltFetched
	 * @return \System\Int32|int
	 */
	public function Next($celt, &$rgelt, &$pceltFetched);
	/**
	 * @param \System\Int32|int $celt
	 * @return \System\Int32|int
	 */
	public function Skip($celt);
	/**
	 * @return \System\Int32|int
	 */
	public function Reset();
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumSTATDATA& &$newEnum
	 * @return \System\Void|void
	 */
	public function Clone(&$newEnum);
}