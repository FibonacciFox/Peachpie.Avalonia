<?php
namespace System\IO;
final class FileStreamOptions extends \System\Object
{

	/**
	 * @property
	 * @var \System\IO\FileMode
	 */
	public $Mode;
	/**
	 * @property
	 * @var \System\IO\FileAccess
	 */
	public $Access;
	/**
	 * @property
	 * @var \System\IO\FileShare
	 */
	public $Share;
	/**
	 * @property
	 * @var \System\IO\FileOptions
	 */
	public $Options;
	/**
	 * @property
	 * @var \System\Int64|int
	 */
	public $PreallocationSize;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $BufferSize;
	/**
	 * @property
	 * @var \System\Nullable_1[System\IO\UnixFileMode]
	 */
	public $UnixCreateMode;
	/**
	 */
	public function __construct(){}
}