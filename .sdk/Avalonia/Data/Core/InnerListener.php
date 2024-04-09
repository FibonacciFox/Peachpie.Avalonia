<?php
namespace Avalonia\Data\Core;
class InnerListener extends \System\Object implements
	\System\IObserver_1,
	\System\IDisposable
{

	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function OnNext($value){}
	/**
	 * @param \Avalonia\Data\Core\BindingExpression $owner
	 */
	public function __construct($owner){}
}