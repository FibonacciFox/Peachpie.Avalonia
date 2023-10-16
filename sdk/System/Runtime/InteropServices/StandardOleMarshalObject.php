<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StandardOleMarshalObjectMethodsOverride
{
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class StandardOleMarshalObject extends \System\MarshalByRefObject implements 
	\System\Runtime\InteropServices\IMarshal
{
	/**
	 * @param \System\Guid& $riid
	 * @param \System\Int32|int $dwDestContext
	 * @param \System\Int32|int $mshlflags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetStdMarshaler($riid, $dwDestContext, $mshlflags){}
	/**
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr $pv
	 * @param \System\Int32|int $dwDestContext
	 * @param \System\IntPtr $pvDestContext
	 * @param \System\Int32|int $mshlflags
	 * @param \System\Guid& $pCid
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetUnmarshalClass($riid, $pv, $dwDestContext, $pvDestContext, $mshlflags, $pCid){}
	/**
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr $pv
	 * @param \System\Int32|int $dwDestContext
	 * @param \System\IntPtr $pvDestContext
	 * @param \System\Int32|int $mshlflags
	 * @param \System\Int32& $pSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMarshalSizeMax($riid, $pv, $dwDestContext, $pvDestContext, $mshlflags, $pSize){}
	/**
	 * @param \System\IntPtr $pStm
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr $pv
	 * @param \System\Int32|int $dwDestContext
	 * @param \System\IntPtr $pvDestContext
	 * @param \System\Int32|int $mshlflags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MarshalInterface($pStm, $riid, $pv, $dwDestContext, $pvDestContext, $mshlflags){}
	/**
	 * @param \System\IntPtr $pStm
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr& $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnmarshalInterface($pStm, $riid, $ppv){}
	/**
	 * @param \System\IntPtr $pStm
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseMarshalData($pStm){}
	/**
	 * @param \System\Int32|int $dwReserved
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DisconnectObject($dwReserved){}
	/**
	 * @uses StandardOleMarshalObjectMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses StandardOleMarshalObjectMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
