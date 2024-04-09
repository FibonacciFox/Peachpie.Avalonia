<?php
namespace System\Runtime\InteropServices\ComTypes;
interface ITypeLib
{

	/**
	 * @return \System\Int32|int
	 */
	public function GetTypeInfoCount();
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo& &$ppTI
	 * @return \System\Void|void
	 */
	public function GetTypeInfo($index, &$ppTI);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Runtime\InteropServices\ComTypes\TYPEKIND& &$pTKind
	 * @return \System\Void|void
	 */
	public function GetTypeInfoType($index, &$pTKind);
	/**
	 * @param \System\Guid& $guid
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo& &$ppTInfo
	 * @return \System\Void|void
	 */
	public function GetTypeInfoOfGuid($guid, &$ppTInfo);
	/**
	 * @param \System\IntPtr& &$ppTLibAttr
	 * @return \System\Void|void
	 */
	public function GetLibAttr(&$ppTLibAttr);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeComp& &$ppTComp
	 * @return \System\Void|void
	 */
	public function GetTypeComp(&$ppTComp);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\String& &$strName
	 * @param \System\String& &$strDocString
	 * @param \System\Int32& &$dwHelpContext
	 * @param \System\String& &$strHelpFile
	 * @return \System\Void|void
	 */
	public function GetDocumentation($index, &$strName, &$strDocString, &$dwHelpContext, &$strHelpFile);
	/**
	 * @param \System\String|string $szNameBuf
	 * @param \System\Int32|int $lHashVal
	 * @return \System\Boolean|bool
	 */
	public function IsName($szNameBuf, $lHashVal);
	/**
	 * @param \System\String|string $szNameBuf
	 * @param \System\Int32|int $lHashVal
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo &$ppTInfo
	 * @param \System\Int32 &$rgMemId
	 * @param \System\Int16& $pcFound
	 * @return \System\Void|void
	 */
	public function FindName($szNameBuf, $lHashVal, &$ppTInfo, &$rgMemId, $pcFound);
	/**
	 * @param \System\IntPtr $pTLibAttr
	 * @return \System\Void|void
	 */
	public function ReleaseTLibAttr($pTLibAttr);
}