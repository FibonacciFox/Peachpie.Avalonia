<?php
namespace Avalonia\Native;
/**
 */
class RunLoopFrame extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Runtime\ExceptionServices\ExceptionDispatchInfo
	 * @field
	 */
	public $Exception;
	/**
	 * @var \System\Threading\CancellationTokenSource
	 * @field
	 */
	public $CancellationTokenSource;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
