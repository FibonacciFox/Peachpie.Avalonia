<?php
namespace System\Threading;
/**
 */
class StartHelper extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_maxStackSize;
	/**
	 * @var \System\Delegate
	 * @field
	 */
	protected $_start;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_startArg;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @field
	 */
	protected $_culture;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @field
	 */
	protected $_uiCulture;
	/**
	 * @var \System\Threading\ExecutionContext
	 * @field
	 */
	protected $_executionContext;
	/**
	 * @var \System\Threading\ContextCallback
	 * @field
	 */
	protected readonly $s_threadStartContextCallback;
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Callback($state){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Run(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RunWorker(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeCulture(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
