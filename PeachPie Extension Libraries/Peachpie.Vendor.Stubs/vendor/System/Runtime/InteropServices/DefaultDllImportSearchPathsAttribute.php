<?php
namespace System\Runtime\InteropServices;
final class DefaultDllImportSearchPathsAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\DllImportSearchPath
	 * @since readonly
	 */
	public $Paths;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Runtime\InteropServices\DllImportSearchPath $paths
	 */
	public function __construct($paths){}
}