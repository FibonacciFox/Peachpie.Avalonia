<?php
namespace System;
final class SafeTypeNameParserHandle extends \Microsoft\Win32\SafeHandles\SafeHandleZeroOrMinusOneIsInvalid implements
	\System\IDisposable
{

	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $handle;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInvalid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsClosed;
	private static function Release($pTypeNameParser){}
	/**
	 */
	public function __construct(){}
}