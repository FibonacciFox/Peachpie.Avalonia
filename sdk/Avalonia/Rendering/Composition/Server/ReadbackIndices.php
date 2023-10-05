<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 */
class ReadbackIndices extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $ReadIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $WriteIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $WrittenIndex;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public $ReadRevision;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public $LastWrittenRevision;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ReadIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ReadIndex($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_WriteIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_WriteIndex($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_WrittenIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_WrittenIndex($value){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_ReadRevision(){}
	/**
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ReadRevision($value){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_LastWrittenRevision(){}
	/**
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_LastWrittenRevision($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function NextRead(){}
	/**
	 * @param \System\UInt64 $writtenRevision
	 * @return \System\Void|void
	 */
	public  function CompleteWrite($writtenRevision){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
