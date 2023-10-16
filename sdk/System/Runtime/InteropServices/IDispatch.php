<?php
namespace System\Runtime\InteropServices;
/**
 */
interface IDispatch
{
	/**
	 */
	public function GetTypeInfoCount();
	/**
	 * @param \System\Int32|int $iTInfo
	 * @param \System\Int32|int $lcid
	 */
	public function GetTypeInfo($iTInfo, $lcid);
	/**
	 * @param \System\Guid& $riid
	 * @param \System\String[] $rgszNames
	 * @param \System\Int32|int $cNames
	 * @param \System\Int32|int $lcid
	 * @param \System\Int32[] $rgDispId
	 */
	public function GetIDsOfNames($riid, $rgszNames, $cNames, $lcid, $rgDispId);
	/**
	 * @param \System\Int32|int $dispIdMember
	 * @param \System\Guid& $riid
	 * @param \System\Int32|int $lcid
	 * @param \System\Runtime\InteropServices\InvokeFlags $wFlags
	 * @param \System\Runtime\InteropServices\ComTypes\DISPPARAMS& $pDispParams
	 * @param \System\IntPtr $pVarResult
	 * @param \System\IntPtr $pExcepInfo
	 * @param \System\IntPtr $puArgErr
	 */
	public function Invoke($dispIdMember, $riid, $lcid, $wFlags, $pDispParams, $pVarResult, $pExcepInfo, $puArgErr);
}
