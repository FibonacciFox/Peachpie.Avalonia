<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IConnectionPoint
{
	/**
	 * @param \System\Guid& $pIID
	 */
	public function GetConnectionInterface($pIID);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IConnectionPointContainer& $ppCPC
	 */
	public function GetConnectionPointContainer($ppCPC);
	/**
	 * @param \System\Object|object $pUnkSink
	 * @param \System\Int32& $pdwCookie
	 */
	public function Advise($pUnkSink, $pdwCookie);
	/**
	 * @param \System\Int32|int $dwCookie
	 */
	public function Unadvise($dwCookie);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumConnections& $ppEnum
	 */
	public function EnumConnections($ppEnum);
}
