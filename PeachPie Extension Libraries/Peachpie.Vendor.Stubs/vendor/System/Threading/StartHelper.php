<?php
namespace System\Threading;
final class StartHelper extends \System\Object
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_maxStackSize;
	/**
	 * @field
	 * @var \System\Delegate
	 */
	protected $_start;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $_startArg;
	/**
	 * @field
	 * @var \System\Globalization\CultureInfo
	 */
	protected $_culture;
	/**
	 * @field
	 * @var \System\Globalization\CultureInfo
	 */
	protected $_uiCulture;
	/**
	 * @field
	 * @var \System\Threading\ExecutionContext
	 */
	protected $_executionContext;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\ContextCallback
	 */
	protected static $s_threadStartContextCallback;
	private static function Callback($state){}
	/**
	 * @return \System\Void|void
	 */
	protected function Run(){}
	private function RunWorker(){}
	private function InitializeCulture(){}
}