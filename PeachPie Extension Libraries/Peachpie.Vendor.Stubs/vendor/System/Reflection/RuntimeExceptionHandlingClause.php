<?php
namespace System\Reflection;
final class RuntimeExceptionHandlingClause extends \System\Reflection\ExceptionHandlingClause
{
	/**
	 * @property
	 * @var \System\Reflection\ExceptionHandlingClauseOptions
	 * @since readonly
	 */
	public $Flags;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $TryOffset;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $TryLength;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $HandlerOffset;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $HandlerLength;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $FilterOffset;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $CatchType;

}