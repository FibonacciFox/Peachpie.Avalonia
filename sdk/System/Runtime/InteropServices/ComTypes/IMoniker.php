<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IMoniker
{
	/**
	 * @param \System\Guid& $pClassID
	 */
	public function GetClassID($pClassID);
	/**
	 */
	public function IsDirty();
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IStream $pStm
	 */
	public function Load($pStm);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IStream $pStm
	 * @param \System\Boolean $fClearDirty
	 */
	public function Save($pStm, $fClearDirty);
	/**
	 * @param \System\Int64& $pcbSize
	 */
	public function GetSizeMax($pcbSize);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\Guid& $riidResult
	 * @param \System\Object& $ppvResult
	 */
	public function BindToObject($pbc, $pmkToLeft, $riidResult, $ppvResult);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\Guid& $riid
	 * @param \System\Object& $ppvObj
	 */
	public function BindToStorage($pbc, $pmkToLeft, $riid, $ppvObj);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Int32|int $dwReduceHowFar
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& $ppmkToLeft
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& $ppmkReduced
	 */
	public function Reduce($pbc, $dwReduceHowFar, $ppmkToLeft, $ppmkReduced);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkRight
	 * @param \System\Boolean $fOnlyIfNotGeneric
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& $ppmkComposite
	 */
	public function ComposeWith($pmkRight, $fOnlyIfNotGeneric, $ppmkComposite);
	/**
	 * @param \System\Boolean $fForward
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumMoniker& $ppenumMoniker
	 */
	public function Enum($fForward, $ppenumMoniker);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkOtherMoniker
	 */
	public function IsEqual($pmkOtherMoniker);
	/**
	 * @param \System\Int32& $pdwHash
	 */
	public function Hash($pdwHash);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkNewlyRunning
	 */
	public function IsRunning($pbc, $pmkToLeft, $pmkNewlyRunning);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\Runtime\InteropServices\ComTypes\FILETIME& $pFileTime
	 */
	public function GetTimeOfLastChange($pbc, $pmkToLeft, $pFileTime);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& $ppmk
	 */
	public function Inverse($ppmk);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkOther
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& $ppmkPrefix
	 */
	public function CommonPrefixWith($pmkOther, $ppmkPrefix);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkOther
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& $ppmkRelPath
	 */
	public function RelativePathTo($pmkOther, $ppmkRelPath);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\String& $ppszDisplayName
	 */
	public function GetDisplayName($pbc, $pmkToLeft, $ppszDisplayName);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IBindCtx $pbc
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker $pmkToLeft
	 * @param \System\String|string $pszDisplayName
	 * @param \System\Int32& $pchEaten
	 * @param \System\Runtime\InteropServices\ComTypes\IMoniker& $ppmkOut
	 */
	public function ParseDisplayName($pbc, $pmkToLeft, $pszDisplayName, $pchEaten, $ppmkOut);
	/**
	 * @param \System\Int32& $pdwMksys
	 */
	public function IsSystemMoniker($pdwMksys);
}
