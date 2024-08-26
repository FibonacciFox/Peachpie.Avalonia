<?php
namespace System\IO;
final class NullStreamReader extends \System\IO\StreamReader implements
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $CurrentEncoding;
	/**
	 * @property
	 * @var \System\IO\Stream
	 * @since readonly
	 */
	public $BaseStream;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $EndOfStream;
	/**
	 */
	public function __construct(){}
}