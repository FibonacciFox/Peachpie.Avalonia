<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IAdviseSink
{
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& $format
	 * @param \System\Runtime\InteropServices\ComTypes\STGMEDIUM& $stgmedium
	 */
	public function OnDataChange($format, $stgmedium);
	/**
	 * @param \System\Int32|int $aspect
	 * @param \System\Int32|int $index
	 */
	public function OnViewChange($aspect, $index);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $moniker
	 */
	public function OnRename($moniker);
	/**
	 */
	public function OnSave();
	/**
	 */
	public function OnClose();
}
