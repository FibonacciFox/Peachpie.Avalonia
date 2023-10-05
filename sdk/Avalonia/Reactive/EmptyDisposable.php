<?php
namespace Avalonia\Reactive;
/**
 */
class EmptyDisposable extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \Avalonia\Reactive\Disposable+EmptyDisposable
	 * @field
	 */
	public readonly $Instance;
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
