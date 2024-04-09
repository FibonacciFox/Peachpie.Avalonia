<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IAdviseSink
{

	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& &$format
	 * @param \System\Runtime\InteropServices\ComTypes\STGMEDIUM& &$stgmedium
	 * @return \System\Void|void
	 */
	public function OnDataChange(&$format, &$stgmedium);
	/**
	 * @param \System\Int32|int $aspect
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function OnViewChange($aspect, $index);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $moniker
	 * @return \System\Void|void
	 */
	public function OnRename($moniker);
	/**
	 * @return \System\Void|void
	 */
	public function OnSave();
	/**
	 * @return \System\Void|void
	 */
	public function OnClose();
}