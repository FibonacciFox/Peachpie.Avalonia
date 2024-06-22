<?php
namespace System\IO;
final class SyncTextWriter extends \System\IO\TextWriter implements
	\System\IDisposable,
	\System\IAsyncDisposable
{

	/**
	 * @field
	 * @var \System\Char[]
	 */
	protected $CoreNewLine;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $Encoding;
	/**
	 * @property
	 * @var \System\IFormatProvider
	 * @since readonly
	 */
	public $FormatProvider;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $NewLine;

}