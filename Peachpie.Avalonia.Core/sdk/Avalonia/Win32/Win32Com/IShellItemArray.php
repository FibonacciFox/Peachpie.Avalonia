<?php
namespace Avalonia\Win32\Win32Com;
/**
 */
interface IShellItemArray
{
	/**
	 * @param \System\Void* $pbc
	 * @param \System\Guid* $bhid
	 * @param \System\Guid* $riid
	 */
	public function BindToHandler($pbc, $bhid, $riid);
	/**
	 * @param \System\UInt16 $flags
	 * @param \System\Guid* $riid
	 */
	public function GetPropertyStore($flags, $riid);
	/**
	 * @param \System\Void* $keyType
	 * @param \System\Guid* $riid
	 */
	public function GetPropertyDescriptionList($keyType, $riid);
	/**
	 * @param \System\Int32|int $AttribFlags
	 * @param \System\UInt16 $sfgaoMask
	 */
	public function GetAttributes($AttribFlags, $sfgaoMask);
	/**
	 */
	public function get_Count();
	/**
	 * @param \System\Int32|int $dwIndex
	 */
	public function GetItemAt($dwIndex);
	/**
	 */
	public function EnumItems();
}
