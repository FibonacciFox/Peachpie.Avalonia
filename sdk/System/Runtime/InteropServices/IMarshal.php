<?php
namespace System\Runtime\InteropServices;
/**
 */
interface IMarshal
{
	/**
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr $pv
	 * @param \System\Int32|int $dwDestContext
	 * @param \System\IntPtr $pvDestContext
	 * @param \System\Int32|int $mshlflags
	 * @param \System\Guid& $pCid
	 */
	public function GetUnmarshalClass($riid, $pv, $dwDestContext, $pvDestContext, $mshlflags, $pCid);
	/**
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr $pv
	 * @param \System\Int32|int $dwDestContext
	 * @param \System\IntPtr $pvDestContext
	 * @param \System\Int32|int $mshlflags
	 * @param \System\Int32& $pSize
	 */
	public function GetMarshalSizeMax($riid, $pv, $dwDestContext, $pvDestContext, $mshlflags, $pSize);
	/**
	 * @param \System\IntPtr $pStm
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr $pv
	 * @param \System\Int32|int $dwDestContext
	 * @param \System\IntPtr $pvDestContext
	 * @param \System\Int32|int $mshlflags
	 */
	public function MarshalInterface($pStm, $riid, $pv, $dwDestContext, $pvDestContext, $mshlflags);
	/**
	 * @param \System\IntPtr $pStm
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr& $ppv
	 */
	public function UnmarshalInterface($pStm, $riid, $ppv);
	/**
	 * @param \System\IntPtr $pStm
	 */
	public function ReleaseMarshalData($pStm);
	/**
	 * @param \System\Int32|int $dwReserved
	 */
	public function DisconnectObject($dwReserved);
}
