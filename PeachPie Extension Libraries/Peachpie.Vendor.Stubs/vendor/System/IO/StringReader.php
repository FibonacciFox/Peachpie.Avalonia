<?php
namespace System\IO;
class StringReader extends \System\IO\TextReader implements
	\System\IDisposable
{

	private static function ThrowObjectDisposedException_ReaderClosed(){}
	/**
	 * @param \System\String|string $s
	 */
	public function __construct($s){}
}