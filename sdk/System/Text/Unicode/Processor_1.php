<?php
namespace System\Text\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Processor_1 extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $CurrentCodeUnitOffset;
	/**
	 * @var \System\Text\Unicode\GraphemeClusterBreakType
	 * @property
	 */
	public $CurrentType;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentCodeUnitOffset(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CurrentCodeUnitOffset($value){}
	/**
	 * @return \System\Text\Unicode\GraphemeClusterBreakType
	 */
	public  function get_CurrentType(){}
	/**
	 * @param \System\Text\Unicode\GraphemeClusterBreakType $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CurrentType($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function MoveNext(){}
}
