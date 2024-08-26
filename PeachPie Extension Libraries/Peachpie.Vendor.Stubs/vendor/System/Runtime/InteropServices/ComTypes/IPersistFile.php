<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IPersistFile
{

	/**
	 * @param \System\Guid& &$pClassID
	 * @return \System\Void|void
	 */
	public function GetClassID(&$pClassID);
	/**
	 * @return \System\Int32|int
	 */
	public function IsDirty();
	/**
	 * @param \System\String|string $pszFileName
	 * @param \System\Int32|int $dwMode
	 * @return \System\Void|void
	 */
	public function Load($pszFileName, $dwMode);
	/**
	 * @param \System\String|string $pszFileName
	 * @param \System\Boolean|bool $fRemember
	 * @return \System\Void|void
	 */
	public function Save($pszFileName, $fRemember);
	/**
	 * @param \System\String|string $pszFileName
	 * @return \System\Void|void
	 */
	public function SaveCompleted($pszFileName);
	/**
	 * @param \System\String& &$ppszFileName
	 * @return \System\Void|void
	 */
	public function GetCurFile(&$ppszFileName);
}