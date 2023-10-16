<?php
namespace System\Runtime\InteropServices;
/**
 */
class ComEventsSink extends \System\Object implements 
	\System\Runtime\InteropServices\IDispatch,
	\System\Runtime\InteropServices\ICustomQueryInterface
{
	/**
	 * @param \System\Runtime\InteropServices\ComEventsSink $sinks
	 * @param \System\Guid& $iid
	 * @return \System\Runtime\InteropServices\ComEventsSink
	 */
	public static function Find($sinks, $iid){}
	/**
	 * @param \System\Runtime\InteropServices\ComEventsSink $sinks
	 * @param \System\Runtime\InteropServices\ComEventsSink $sink
	 * @return \System\Runtime\InteropServices\ComEventsSink
	 */
	public static function Add($sinks, $sink){}
	/**
	 * @param \System\Runtime\InteropServices\ComEventsSink $sinks
	 * @return \System\Runtime\InteropServices\ComEventsSink
	 */
	public static function RemoveAll($sinks){}
	/**
	 * @param \System\Runtime\InteropServices\ComEventsSink $sinks
	 * @param \System\Runtime\InteropServices\ComEventsSink $sink
	 * @return \System\Runtime\InteropServices\ComEventsSink
	 */
	public static function Remove($sinks, $sink){}
	/**
	 * @param \System\Runtime\InteropServices\ComEventsMethod $method
	 * @return \System\Runtime\InteropServices\ComEventsMethod
	 */
	public  function RemoveMethod($method){}
	/**
	 * @param \System\Int32|int $dispid
	 * @return \System\Runtime\InteropServices\ComEventsMethod
	 */
	public  function FindMethod($dispid){}
	/**
	 * @param \System\Int32|int $dispid
	 * @return \System\Runtime\InteropServices\ComEventsMethod
	 */
	public  function AddMethod($dispid){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeInfoCount(){}
	/**
	 * @param \System\Int32|int $iTInfo
	 * @param \System\Int32|int $lcid
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeInfo($iTInfo, $lcid){}
	/**
	 * @param \System\Guid& $iid
	 * @param \System\String[] $names
	 * @param \System\Int32|int $cNames
	 * @param \System\Int32|int $lcid
	 * @param \System\Int32[] $rgDispId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetIDsOfNames($iid, $names, $cNames, $lcid, $rgDispId){}
	/**
	 * @param \System\Runtime\InteropServices\Variant& $pSrc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetVariant($pSrc){}
	/**
	 * @param \System\Int32|int $dispid
	 * @param \System\Guid& $riid
	 * @param \System\Int32|int $lcid
	 * @param \System\Runtime\InteropServices\InvokeFlags $wFlags
	 * @param \System\Runtime\InteropServices\ComTypes\DISPPARAMS& $pDispParams
	 * @param \System\IntPtr $pVarResult
	 * @param \System\IntPtr $pExcepInfo
	 * @param \System\IntPtr $puArgErr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Invoke($dispid, $riid, $lcid, $wFlags, $pDispParams, $pVarResult, $pExcepInfo, $puArgErr){}
	/**
	 * @param \System\Guid& $iid
	 * @param \System\IntPtr& $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetInterface($iid, $ppv){}
	/**
	 * @param \System\Object|object $rcw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Advise($rcw){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Unadvise(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
