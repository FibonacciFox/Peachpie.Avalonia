<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IPersistFile
{
	/**
	 * @param \System\Guid& $pClassID
	 */
	public function GetClassID($pClassID);
	/**
	 */
	public function IsDirty();
	/**
	 * @param \System\String|string $pszFileName
	 * @param \System\Int32|int $dwMode
	 */
	public function Load($pszFileName, $dwMode);
	/**
	 * @param \System\String|string $pszFileName
	 * @param \System\Boolean $fRemember
	 */
	public function Save($pszFileName, $fRemember);
	/**
	 * @param \System\String|string $pszFileName
	 */
	public function SaveCompleted($pszFileName);
	/**
	 * @param \System\String& $ppszFileName
	 */
	public function GetCurFile($ppszFileName);
}
