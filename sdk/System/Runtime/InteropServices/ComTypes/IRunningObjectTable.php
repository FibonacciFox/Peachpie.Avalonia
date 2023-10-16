<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IRunningObjectTable
{
	/**
	 * @param \System\Int32|int $grfFlags
	 * @param \System\Object|object $punkObject
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkObjectName
	 */
	public function Register($grfFlags, $punkObject, $pmkObjectName);
	/**
	 * @param \System\Int32|int $dwRegister
	 */
	public function Revoke($dwRegister);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkObjectName
	 */
	public function IsRunning($pmkObjectName);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkObjectName
	 * @param \System\Object& $ppunkObject
	 */
	public function GetObject($pmkObjectName, $ppunkObject);
	/**
	 * @param \System\Int32|int $dwRegister
	 * @param \System\Runtime\InteropServices\ComTypes\FILETIME& $pfiletime
	 */
	public function NoteChangeTime($dwRegister, $pfiletime);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkObjectName
	 * @param \System\Runtime\InteropServices\ComTypes\FILETIME& $pfiletime
	 */
	public function GetTimeOfLastChange($pmkObjectName, $pfiletime);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumMoniker& $ppenumMoniker
	 */
	public function EnumRunning($ppenumMoniker);
}
