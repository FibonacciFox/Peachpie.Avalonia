<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IEnumFORMATETC
{

	/**
	 * @param \System\Int32|int $celt
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC &$rgelt
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
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumFORMATETC& &$newEnum
	 * @return \System\Void|void
	 */
	public function Clone(&$newEnum);
}