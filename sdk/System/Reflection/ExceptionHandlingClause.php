<?php
namespace System\Reflection;
/**
 */
class ExceptionHandlingClause extends \System\Object
{
	/**
	 * @var \System\Reflection\ExceptionHandlingClauseOptions
	 * @property
	 */
	public readonly $Flags;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $TryOffset;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $TryLength;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $HandlerOffset;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $HandlerLength;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $FilterOffset;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $CatchType;
	/**
	 * @return \System\Reflection\ExceptionHandlingClauseOptions
	 */
	public  function get_Flags(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TryOffset(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TryLength(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_HandlerOffset(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_HandlerLength(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_FilterOffset(){}
	/**
	 * @return \System\Type
	 */
	public  function get_CatchType(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
