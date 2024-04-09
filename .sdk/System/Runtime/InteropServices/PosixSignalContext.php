<?php
namespace System\Runtime\InteropServices;
final class PosixSignalContext extends \System\Object
{
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\PosixSignal
	 */
	public $Signal;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Cancel;
	/**
	 * @param \System\Runtime\InteropServices\PosixSignal $signal
	 */
	public function __construct($signal){}
}