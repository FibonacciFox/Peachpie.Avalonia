<?php
namespace Avalonia\Reactive\Operators;
final class SourceObserver extends \System\Object implements
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
	 * @param \Avalonia\Reactive\Operators\CombineLatest_2+_ $parent [generic: TSource,TResult]
	 * @param \System\Int32|int $index
	 */
	public function __construct($parent, $index){}
}