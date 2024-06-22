<?php
namespace Avalonia\Reactive\Operators;
final class InnerObserver extends \System\Object implements
	\System\IObserver_1,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\IDisposable
	 */
	public $Disposable;
	/**
	 * @param \TSource $value
	 * @return \System\Void|void
	 */
	public function OnNext($value){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error){}
	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Reactive\Operators\Switch_1+_ $parent [generic: TSource]
	 * @param \System\UInt64 $id
	 */
	public function __construct($parent, $id){}
}