<?php
namespace System\Runtime\InteropServices;
/**
 */
class LibraryImportAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $LibraryName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $EntryPoint;
	/**
	 * @var \System\Runtime\InteropServices\StringMarshalling
	 * @property
	 */
	public $StringMarshalling;
	/**
	 * @var \System\Type
	 * @property
	 */
	public $StringMarshallingCustomType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $SetLastError;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_LibraryName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_EntryPoint(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_EntryPoint($value){}
	/**
	 * @return \System\Runtime\InteropServices\StringMarshalling
	 */
	public  function get_StringMarshalling(){}
	/**
	 * @param \System\Runtime\InteropServices\StringMarshalling $value
	 * @return \System\Void|void
	 */
	public  function set_StringMarshalling($value){}
	/**
	 * @return \System\Type
	 */
	public  function get_StringMarshallingCustomType(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_StringMarshallingCustomType($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SetLastError(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_SetLastError($value){}
}
