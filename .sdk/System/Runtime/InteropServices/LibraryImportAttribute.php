<?php
namespace System\Runtime\InteropServices;
final class LibraryImportAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $LibraryName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $EntryPoint;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\StringMarshalling
	 */
	public $StringMarshalling;
	/**
	 * @property
	 * @var \System\Type
	 */
	public $StringMarshallingCustomType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $SetLastError;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $libraryName
	 */
	public function __construct($libraryName){}
}