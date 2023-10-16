<?php
namespace System\Reflection;
/**
 */
class RuntimeExceptionHandlingClause extends \System\Reflection\ExceptionHandlingClause
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
}
