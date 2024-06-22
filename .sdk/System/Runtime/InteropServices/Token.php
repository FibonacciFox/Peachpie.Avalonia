<?php
namespace System\Runtime\InteropServices;
final class Token extends \System\Object
{

	/**
	 * @property
	 * @var \System\Runtime\InteropServices\PosixSignal
	 * @since readonly
	 */
	public $Signal;
	/**
	 * @property
	 * @var \System\Action_1[System\Runtime\InteropServices\PosixSignalContext]
	 * @since readonly
	 */
	public $Handler;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $SigNo;
	/**
	 * @param \System\Runtime\InteropServices\PosixSignal $signal
	 * @param \System\Int32|int $sigNo
	 * @param \System\Action_1 $handler [generic: System\Runtime\InteropServices\PosixSignalContext]
	 */
	public function __construct($signal, $sigNo, $handler){}
}