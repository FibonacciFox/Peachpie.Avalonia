<?php
namespace System\Runtime\InteropServices\ComTypes;
interface ITypeInfo2
{


	/**
	 * @param \System\IntPtr& &$ppTypeAttr
	 * @return \System\Void|void
	 */
	public function GetTypeAttr(&$ppTypeAttr);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeComp& &$ppTComp
	 * @return \System\Void|void
	 */
	public function GetTypeComp(&$ppTComp);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\IntPtr& &$ppFuncDesc
	 * @return \System\Void|void
	 */
	public function GetFuncDesc($index, &$ppFuncDesc);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\IntPtr& &$ppVarDesc
	 * @return \System\Void|void
	 */
	public function GetVarDesc($index, &$ppVarDesc);
	/**
	 * @param \System\Int32|int $memid
	 * @param \System\String &$rgBstrNames
	 * @param \System\Int32|int $cMaxNames
	 * @param \System\Int32& &$pcNames
	 * @return \System\Void|void
	 */
	public function GetNames($memid, &$rgBstrNames, $cMaxNames, &$pcNames);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32& &$href
	 * @return \System\Void|void
	 */
	public function GetRefTypeOfImplType($index, &$href);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Runtime\InteropServices\ComTypes\IMPLTYPEFLAGS& &$pImplTypeFlags
	 * @return \System\Void|void
	 */
	public function GetImplTypeFlags($index, &$pImplTypeFlags);
	/**
	 * @param \System\String &$rgszNames
	 * @param \System\Int32|int $cNames
	 * @param \System\Int32 &$pMemId
	 * @return \System\Void|void
	 */
	public function GetIDsOfNames(&$rgszNames, $cNames, &$pMemId);
	/**
	 * @param \System\Object|object $pvInstance
	 * @param \System\Int32|int $memid
	 * @param \System\Int16 $wFlags
	 * @param \System\Runtime\InteropServices\ComTypes\DISPPARAMS& $pDispParams
	 * @param \System\IntPtr $pVarResult
	 * @param \System\IntPtr $pExcepInfo
	 * @param \System\Int32& &$puArgErr
	 * @return \System\Void|void
	 */
	public function Invoke($pvInstance, $memid, $wFlags, $pDispParams, $pVarResult, $pExcepInfo, &$puArgErr);
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
	 * @param \System\Int32|int $memid
	 * @param \System\Runtime\InteropServices\ComTypes\INVOKEKIND $invKind
	 * @param \System\IntPtr $pBstrDllName
	 * @param \System\IntPtr $pBstrName
	 * @param \System\IntPtr $pwOrdinal
	 * @return \System\Void|void
	 */
	public function GetDllEntry($memid, $invKind, $pBstrDllName, $pBstrName, $pwOrdinal);
	/**
	 * @param \System\Int32|int $hRef
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo& &$ppTI
	 * @return \System\Void|void
	 */
	public function GetRefTypeInfo($hRef, &$ppTI);
	/**
	 * @param \System\Int32|int $memid
	 * @param \System\Runtime\InteropServices\ComTypes\INVOKEKIND $invKind
	 * @param \System\IntPtr& &$ppv
	 * @return \System\Void|void
	 */
	public function AddressOfMember($memid, $invKind, &$ppv);
	/**
	 * @param \System\Object|object $pUnkOuter
	 * @param \System\Guid& &$riid
	 * @param \System\Object& &$ppvObj
	 * @return \System\Void|void
	 */
	public function CreateInstance($pUnkOuter, &$riid, &$ppvObj);
	/**
	 * @param \System\Int32|int $memid
	 * @param \System\String& &$pBstrMops
	 * @return \System\Void|void
	 */
	public function GetMops($memid, &$pBstrMops);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeLib& &$ppTLB
	 * @param \System\Int32& &$pIndex
	 * @return \System\Void|void
	 */
	public function GetContainingTypeLib(&$ppTLB, &$pIndex);
	/**
	 * @param \System\IntPtr $pTypeAttr
	 * @return \System\Void|void
	 */
	public function ReleaseTypeAttr($pTypeAttr);
	/**
	 * @param \System\IntPtr $pFuncDesc
	 * @return \System\Void|void
	 */
	public function ReleaseFuncDesc($pFuncDesc);
	/**
	 * @param \System\IntPtr $pVarDesc
	 * @return \System\Void|void
	 */
	public function ReleaseVarDesc($pVarDesc);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\TYPEKIND& &$pTypeKind
	 * @return \System\Void|void
	 */
	public function GetTypeKind(&$pTypeKind);
	/**
	 * @param \System\Int32& &$pTypeFlags
	 * @return \System\Void|void
	 */
	public function GetTypeFlags(&$pTypeFlags);
	/**
	 * @param \System\Int32|int $memid
	 * @param \System\Runtime\InteropServices\ComTypes\INVOKEKIND $invKind
	 * @param \System\Int32& &$pFuncIndex
	 * @return \System\Void|void
	 */
	public function GetFuncIndexOfMemId($memid, $invKind, &$pFuncIndex);
	/**
	 * @param \System\Int32|int $memid
	 * @param \System\Int32& &$pVarIndex
	 * @return \System\Void|void
	 */
	public function GetVarIndexOfMemId($memid, &$pVarIndex);
	/**
	 * @param \System\Guid& $guid
	 * @param \System\Object& &$pVarVal
	 * @return \System\Void|void
	 */
	public function GetCustData($guid, &$pVarVal);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Guid& $guid
	 * @param \System\Object& &$pVarVal
	 * @return \System\Void|void
	 */
	public function GetFuncCustData($index, $guid, &$pVarVal);
	/**
	 * @param \System\Int32|int $indexFunc
	 * @param \System\Int32|int $indexParam
	 * @param \System\Guid& $guid
	 * @param \System\Object& &$pVarVal
	 * @return \System\Void|void
	 */
	public function GetParamCustData($indexFunc, $indexParam, $guid, &$pVarVal);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Guid& $guid
	 * @param \System\Object& &$pVarVal
	 * @return \System\Void|void
	 */
	public function GetVarCustData($index, $guid, &$pVarVal);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Guid& $guid
	 * @param \System\Object& &$pVarVal
	 * @return \System\Void|void
	 */
	public function GetImplTypeCustData($index, $guid, &$pVarVal);
	/**
	 * @param \System\Int32|int $memid
	 * @param \System\String& &$pbstrHelpString
	 * @param \System\Int32& &$pdwHelpStringContext
	 * @param \System\String& &$pbstrHelpStringDll
	 * @return \System\Void|void
	 */
	public function GetDocumentation2($memid, &$pbstrHelpString, &$pdwHelpStringContext, &$pbstrHelpStringDll);
	/**
	 * @param \System\IntPtr $pCustData
	 * @return \System\Void|void
	 */
	public function GetAllCustData($pCustData);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\IntPtr $pCustData
	 * @return \System\Void|void
	 */
	public function GetAllFuncCustData($index, $pCustData);
	/**
	 * @param \System\Int32|int $indexFunc
	 * @param \System\Int32|int $indexParam
	 * @param \System\IntPtr $pCustData
	 * @return \System\Void|void
	 */
	public function GetAllParamCustData($indexFunc, $indexParam, $pCustData);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\IntPtr $pCustData
	 * @return \System\Void|void
	 */
	public function GetAllVarCustData($index, $pCustData);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\IntPtr $pCustData
	 * @return \System\Void|void
	 */
	public function GetAllImplTypeCustData($index, $pCustData);
}