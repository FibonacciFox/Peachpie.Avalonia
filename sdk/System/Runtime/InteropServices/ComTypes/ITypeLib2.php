<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface ITypeLib2
{
	/**
	 */
	public function GetTypeInfoCount();
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo& $ppTI
	 */
	public function GetTypeInfo($index, $ppTI);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Runtime\InteropServices\ComTypes\TYPEKIND& $pTKind
	 */
	public function GetTypeInfoType($index, $pTKind);
	/**
	 * @param \System\Guid& $guid
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo& $ppTInfo
	 */
	public function GetTypeInfoOfGuid($guid, $ppTInfo);
	/**
	 * @param \System\IntPtr& $ppTLibAttr
	 */
	public function GetLibAttr($ppTLibAttr);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeComp& $ppTComp
	 */
	public function GetTypeComp($ppTComp);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\String& $strName
	 * @param \System\String& $strDocString
	 * @param \System\Int32& $dwHelpContext
	 * @param \System\String& $strHelpFile
	 */
	public function GetDocumentation($index, $strName, $strDocString, $dwHelpContext, $strHelpFile);
	/**
	 * @param \System\String|string $szNameBuf
	 * @param \System\Int32|int $lHashVal
	 */
	public function IsName($szNameBuf, $lHashVal);
	/**
	 * @param \System\String|string $szNameBuf
	 * @param \System\Int32|int $lHashVal
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo[] $ppTInfo
	 * @param \System\Int32[] $rgMemId
	 * @param \System\Int16& $pcFound
	 */
	public function FindName($szNameBuf, $lHashVal, $ppTInfo, $rgMemId, $pcFound);
	/**
	 * @param \System\IntPtr $pTLibAttr
	 */
	public function ReleaseTLibAttr($pTLibAttr);
	/**
	 * @param \System\Guid& $guid
	 * @param \System\Object& $pVarVal
	 */
	public function GetCustData($guid, $pVarVal);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\String& $pbstrHelpString
	 * @param \System\Int32& $pdwHelpStringContext
	 * @param \System\String& $pbstrHelpStringDll
	 */
	public function GetDocumentation2($index, $pbstrHelpString, $pdwHelpStringContext, $pbstrHelpStringDll);
	/**
	 * @param \System\IntPtr $pcUniqueNames
	 * @param \System\Int32& $pcchUniqueNames
	 */
	public function GetLibStatistics($pcUniqueNames, $pcchUniqueNames);
	/**
	 * @param \System\IntPtr $pCustData
	 */
	public function GetAllCustData($pCustData);
}
