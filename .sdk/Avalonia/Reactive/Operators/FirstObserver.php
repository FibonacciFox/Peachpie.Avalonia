<?php
namespace Avalonia\Reactive\Operators;
final class FirstObserver extends \System\Object implements
	\System\IObserver_1
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasValue;
	/**
	 * @property
	 * @var \TFirst
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Done;
	/**
	 * @param \Avalonia\Reactive\Operators\CombineLatest_3+_+SecondObserver $other [generic: TFirst,TSecond,TResult]
	 * @return \System\Void|void
	 */
	public function SetOther($other){}
	/**
	 * @param \TFirst $value
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
	 * @param \Avalonia\Reactive\Operators\CombineLatest_3+_ $parent [generic: TFirst,TSecond,TResult]
	 */
	public function __construct($parent){}
}