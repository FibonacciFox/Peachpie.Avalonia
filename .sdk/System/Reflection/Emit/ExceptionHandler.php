<?php
namespace System\Reflection\Emit;
final class ExceptionHandler extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_exceptionClass;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_tryStartOffset;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_tryEndOffset;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_filterOffset;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_handlerStartOffset;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_handlerEndOffset;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\ExceptionHandlingClauseOptions
	 */
	protected $m_kind;

}