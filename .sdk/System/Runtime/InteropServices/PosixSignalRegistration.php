<?php
namespace System\Runtime\InteropServices;
final class PosixSignalRegistration extends \System\Object implements
	\System\IDisposable
{

	/**
	 * @param \System\Runtime\InteropServices\PosixSignal $signal
	 * @param \System\Action_1 $handler [generic: System\Runtime\InteropServices\PosixSignalContext]
	 * @return \System\Runtime\InteropServices\PosixSignalRegistration
	 */
	public static function Create($signal, $handler){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private static function Initialize(){}
	private static function Register($signal, $handler){}
	private function Unregister(){}
	private static function OnPosixSignal($signo, $signal){}
}