<?php
namespace System\IO;
/**
 */
class FileStreamOptions extends \System\Object
{
	/**
	 * @var \System\IO\FileMode
	 * @property
	 */
	public $Mode;
	/**
	 * @var \System\IO\FileAccess
	 * @property
	 */
	public $Access;
	/**
	 * @var \System\IO\FileShare
	 * @property
	 */
	public $Share;
	/**
	 * @var \System\IO\FileOptions
	 * @property
	 */
	public $Options;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $PreallocationSize;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $BufferSize;
	/**
	 * @var \System\Nullable_1[System\IO\UnixFileMode]
	 * @property
	 */
	public $UnixCreateMode;
	/**
	 * @return \System\IO\FileMode
	 */
	public  function get_Mode(){}
	/**
	 * @param \System\IO\FileMode $value
	 * @return \System\Void|void
	 */
	public  function set_Mode($value){}
	/**
	 * @return \System\IO\FileAccess
	 */
	public  function get_Access(){}
	/**
	 * @param \System\IO\FileAccess $value
	 * @return \System\Void|void
	 */
	public  function set_Access($value){}
	/**
	 * @return \System\IO\FileShare
	 */
	public  function get_Share(){}
	/**
	 * @param \System\IO\FileShare $value
	 * @return \System\Void|void
	 */
	public  function set_Share($value){}
	/**
	 * @return \System\IO\FileOptions
	 */
	public  function get_Options(){}
	/**
	 * @param \System\IO\FileOptions $value
	 * @return \System\Void|void
	 */
	public  function set_Options($value){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_PreallocationSize(){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public  function set_PreallocationSize($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BufferSize(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_BufferSize($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_UnixCreateMode(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_UnixCreateMode($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
