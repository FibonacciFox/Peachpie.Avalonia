<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IRunningObjectTable
{


	/**
	 * @param \System\Int32|int $grfFlags
	 * @param \System\Object|object $punkObject
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkObjectName
	 * @return \System\Int32|int
	 */
	public function Register($grfFlags, $punkObject, $pmkObjectName);
	/**
	 * @param \System\Int32|int $dwRegister
	 * @return \System\Void|void
	 */
	public function Revoke($dwRegister);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkObjectName
	 * @return \System\Int32|int
	 */
	public function IsRunning($pmkObjectName);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkObjectName
	 * @param \System\Object& &$ppunkObject
	 * @return \System\Int32|int
	 */
	public function GetObject($pmkObjectName, &$ppunkObject);
	/**
	 * @param \System\Int32|int $dwRegister
	 * @param \System\Runtime\InteropServices\ComTypes\FILETIME& $pfiletime
	 * @return \System\Void|void
	 */
	public function NoteChangeTime($dwRegister, $pfiletime);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkObjectName
	 * @param \System\Runtime\InteropServices\ComTypes\FILETIME& &$pfiletime
	 * @return \System\Int32|int
	 */
	public function GetTimeOfLastChange($pmkObjectName, &$pfiletime);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumMoniker& &$ppenumMoniker
	 * @return \System\Void|void
	 */
	public function EnumRunning(&$ppenumMoniker);
}