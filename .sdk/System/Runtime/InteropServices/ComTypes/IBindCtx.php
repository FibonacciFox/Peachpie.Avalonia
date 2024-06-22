<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IBindCtx
{


	/**
	 * @param \System\Object|object $punk
	 * @return \System\Void|void
	 */
	public function RegisterObjectBound($punk);
	/**
	 * @param \System\Object|object $punk
	 * @return \System\Void|void
	 */
	public function RevokeObjectBound($punk);
	/**
	 * @return \System\Void|void
	 */
	public function ReleaseBoundObjects();
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\BIND_OPTS& &$pbindopts
	 * @return \System\Void|void
	 */
	public function SetBindOptions(&$pbindopts);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\BIND_OPTS& $pbindopts
	 * @return \System\Void|void
	 */
	public function GetBindOptions($pbindopts);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IRunningObjectTable& &$pprot
	 * @return \System\Void|void
	 */
	public function GetRunningObjectTable(&$pprot);
	/**
	 * @param \System\String|string $pszKey
	 * @param \System\Object|object $punk
	 * @return \System\Void|void
	 */
	public function RegisterObjectParam($pszKey, $punk);
	/**
	 * @param \System\String|string $pszKey
	 * @param \System\Object& &$ppunk
	 * @return \System\Void|void
	 */
	public function GetObjectParam($pszKey, &$ppunk);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumString& &$ppenum
	 * @return \System\Void|void
	 */
	public function EnumObjectParam(&$ppenum);
	/**
	 * @param \System\String|string $pszKey
	 * @return \System\Int32|int
	 */
	public function RevokeObjectParam($pszKey);
}