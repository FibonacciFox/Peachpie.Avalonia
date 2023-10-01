<?php
namespace Avalonia\Win32\Win32Com;
/**
 */
interface IShellItem
{
	/**
	 * @param \System\Void* $pbc
	 * @param \System\Guid* $bhid
	 * @param \System\Guid* $riid
	 */
	public function BindToHandler($pbc, $bhid, $riid);
	/**
	 */
	public function get_Parent();
	/**
	 * @param \System\UInt32 $sigdnName
	 */
	public function GetDisplayName($sigdnName);
	/**
	 * @param \System\UInt32 $sfgaoMask
	 */
	public function GetAttributes($sfgaoMask);
	/**
	 * @param \Avalonia\Win32\Win32Com\IShellItem $psi
	 * @param \System\UInt32 $hint
	 */
	public function Compare($psi, $hint);
}
