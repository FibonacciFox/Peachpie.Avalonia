<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IStream
{
	/**
	 * @param \System\Byte[] $pv
	 * @param \System\Int32|int $cb
	 * @param \System\IntPtr $pcbRead
	 */
	public function Read($pv, $cb, $pcbRead);
	/**
	 * @param \System\Byte[] $pv
	 * @param \System\Int32|int $cb
	 * @param \System\IntPtr $pcbWritten
	 */
	public function Write($pv, $cb, $pcbWritten);
	/**
	 * @param \System\Int64|int $dlibMove
	 * @param \System\Int32|int $dwOrigin
	 * @param \System\IntPtr $plibNewPosition
	 */
	public function Seek($dlibMove, $dwOrigin, $plibNewPosition);
	/**
	 * @param \System\Int64|int $libNewSize
	 */
	public function SetSize($libNewSize);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IStream $pstm
	 * @param \System\Int64|int $cb
	 * @param \System\IntPtr $pcbRead
	 * @param \System\IntPtr $pcbWritten
	 */
	public function CopyTo($pstm, $cb, $pcbRead, $pcbWritten);
	/**
	 * @param \System\Int32|int $grfCommitFlags
	 */
	public function Commit($grfCommitFlags);
	/**
	 */
	public function Revert();
	/**
	 * @param \System\Int64|int $libOffset
	 * @param \System\Int64|int $cb
	 * @param \System\Int32|int $dwLockType
	 */
	public function LockRegion($libOffset, $cb, $dwLockType);
	/**
	 * @param \System\Int64|int $libOffset
	 * @param \System\Int64|int $cb
	 * @param \System\Int32|int $dwLockType
	 */
	public function UnlockRegion($libOffset, $cb, $dwLockType);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\STATSTG& $pstatstg
	 * @param \System\Int32|int $grfStatFlag
	 */
	public function Stat($pstatstg, $grfStatFlag);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IStream& $ppstm
	 */
	public function Clone($ppstm);
}
