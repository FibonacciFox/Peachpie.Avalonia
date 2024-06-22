<?php
namespace System\Runtime;
final class MemoryFailPoint extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject implements
	\System\IDisposable
{


	private static function AddToLastKnownFreeAddressSpace($addend){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function Disposing(){}
	/**
	 * @param \System\Int64|int $size
	 * @return \System\Int64|int
	 */
	protected static function AddMemoryFailPointReservation($size){}
	private static function CheckForAvailableMemory(&$availPageFile, &$totalAddressSpaceFree){}
	private static function CheckForFreeAddressSpace($size, $shouldThrow){}
	private static function GrowPageFileIfNecessaryAndPossible($numBytes){}
	/**
	 * @param \System\Int32|int $sizeInMegabytes
	 */
	public function __construct($sizeInMegabytes){}
}