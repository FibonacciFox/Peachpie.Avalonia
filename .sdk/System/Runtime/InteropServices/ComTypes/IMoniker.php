<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IMoniker
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
	 * @param \System\Runtime\InteropServices\ComTypes\IStream $pStm
	 * @return \System\Void|void
	 */
	public function Load($pStm);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IStream $pStm
	 * @param \System\Boolean|bool $fClearDirty
	 * @return \System\Void|void
	 */
	public function Save($pStm, $fClearDirty);
	/**
	 * @param \System\Int64& &$pcbSize
	 * @return \System\Void|void
	 */
	public function GetSizeMax(&$pcbSize);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\Guid& &$riidResult
	 * @param \System\Object& &$ppvResult
	 * @return \System\Void|void
	 */
	public function BindToObject($pbc, $pmkToLeft, &$riidResult, &$ppvResult);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\Guid& &$riid
	 * @param \System\Object& &$ppvObj
	 * @return \System\Void|void
	 */
	public function BindToStorage($pbc, $pmkToLeft, &$riid, &$ppvObj);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Int32|int $dwReduceHowFar
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& $ppmkToLeft
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& &$ppmkReduced
	 * @return \System\Void|void
	 */
	public function Reduce($pbc, $dwReduceHowFar, $ppmkToLeft, &$ppmkReduced);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkRight
	 * @param \System\Boolean|bool $fOnlyIfNotGeneric
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& &$ppmkComposite
	 * @return \System\Void|void
	 */
	public function ComposeWith($pmkRight, $fOnlyIfNotGeneric, &$ppmkComposite);
	/**
	 * @param \System\Boolean|bool $fForward
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumMoniker& &$ppenumMoniker
	 * @return \System\Void|void
	 */
	public function Enum($fForward, &$ppenumMoniker);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkOtherMoniker
	 * @return \System\Int32|int
	 */
	public function IsEqual($pmkOtherMoniker);
	/**
	 * @param \System\Int32& &$pdwHash
	 * @return \System\Void|void
	 */
	public function Hash(&$pdwHash);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkNewlyRunning
	 * @return \System\Int32|int
	 */
	public function IsRunning($pbc, $pmkToLeft, $pmkNewlyRunning);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\Runtime\InteropServices\ComTypes\FILETIME& &$pFileTime
	 * @return \System\Void|void
	 */
	public function GetTimeOfLastChange($pbc, $pmkToLeft, &$pFileTime);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& &$ppmk
	 * @return \System\Void|void
	 */
	public function Inverse(&$ppmk);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkOther
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& &$ppmkPrefix
	 * @return \System\Void|void
	 */
	public function CommonPrefixWith($pmkOther, &$ppmkPrefix);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkOther
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& &$ppmkRelPath
	 * @return \System\Void|void
	 */
	public function RelativePathTo($pmkOther, &$ppmkRelPath);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\String& &$ppszDisplayName
	 * @return \System\Void|void
	 */
	public function GetDisplayName($pbc, $pmkToLeft, &$ppszDisplayName);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\String|string $pszDisplayName
	 * @param \System\Int32& &$pchEaten
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& &$ppmkOut
	 * @return \System\Void|void
	 */
	public function ParseDisplayName($pbc, $pmkToLeft, $pszDisplayName, &$pchEaten, &$ppmkOut);
	/**
	 * @param \System\Int32& &$pdwMksys
	 * @return \System\Int32|int
	 */
	public function IsSystemMoniker(&$pdwMksys);
}