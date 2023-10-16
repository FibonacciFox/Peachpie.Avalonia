<?php
namespace System\Drawing\Printing;
/**
 */
class PaperSource extends \System\Object
{
	/**
	 * @var \System\Drawing\Printing\PaperSourceKind
	 * @property
	 */
	public readonly $Kind;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $RawKind;
	/**
	 * @var \System\String
	 * @property
	 */
	public $SourceName;
	/**
	 * @return \System\Drawing\Printing\PaperSourceKind
	 */
	public  function get_Kind(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RawKind(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_RawKind($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_SourceName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_SourceName($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
