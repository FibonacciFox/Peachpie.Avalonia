<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IConnectionPoint
{


	/**
	 * @param \System\Guid& &$pIID
	 * @return \System\Void|void
	 */
	public function GetConnectionInterface(&$pIID);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IConnectionPointContainer& &$ppCPC
	 * @return \System\Void|void
	 */
	public function GetConnectionPointContainer(&$ppCPC);
	/**
	 * @param \System\Object|object $pUnkSink
	 * @param \System\Int32& &$pdwCookie
	 * @return \System\Void|void
	 */
	public function Advise($pUnkSink, &$pdwCookie);
	/**
	 * @param \System\Int32|int $dwCookie
	 * @return \System\Void|void
	 */
	public function Unadvise($dwCookie);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumConnections& &$ppEnum
	 * @return \System\Void|void
	 */
	public function EnumConnections(&$ppEnum);
}