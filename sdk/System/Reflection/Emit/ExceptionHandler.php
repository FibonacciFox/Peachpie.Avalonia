<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExceptionHandlerMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class ExceptionHandler extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_exceptionClass;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_tryStartOffset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_tryEndOffset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_filterOffset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_handlerStartOffset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_handlerEndOffset;
	/**
	 * @var \System\Reflection\ExceptionHandlingClauseOptions
	 * @field
	 */
	protected readonly $m_kind;
	/**
	 * @uses ExceptionHandlerMethodsOverride::Equals_1 ($obj)
	 * @uses ExceptionHandlerMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
