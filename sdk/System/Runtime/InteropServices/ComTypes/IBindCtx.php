<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IBindCtx
{
	/**
	 * @param \System\Object|object $punk
	 */
	public function RegisterObjectBound($punk);
	/**
	 * @param \System\Object|object $punk
	 */
	public function RevokeObjectBound($punk);
	/**
	 */
	public function ReleaseBoundObjects();
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\BIND_OPTS& $pbindopts
	 */
	public function SetBindOptions($pbindopts);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\BIND_OPTS& $pbindopts
	 */
	public function GetBindOptions($pbindopts);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IRunningObjectTable& $pprot
	 */
	public function GetRunningObjectTable($pprot);
	/**
	 * @param \System\String|string $pszKey
	 * @param \System\Object|object $punk
	 */
	public function RegisterObjectParam($pszKey, $punk);
	/**
	 * @param \System\String|string $pszKey
	 * @param \System\Object& $ppunk
	 */
	public function GetObjectParam($pszKey, $ppunk);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumString& $ppenum
	 */
	public function EnumObjectParam($ppenum);
	/**
	 * @param \System\String|string $pszKey
	 */
	public function RevokeObjectParam($pszKey);
}
