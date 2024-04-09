<?php
namespace System\IO;
final class SyncTextReader extends \System\IO\TextReader implements
	\System\IDisposable
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\IO\TextReader
	 */
	protected $_in;

}