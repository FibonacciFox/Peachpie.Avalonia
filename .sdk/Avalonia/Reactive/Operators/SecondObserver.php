<?php
namespace Avalonia\Reactive\Operators;
final class SecondObserver extends \System\Object implements
	\System\IObserver_1
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasValue;
	/**
	 * @property
	 * @var \TSecond
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Done;
	/**
	 * @param \Avalonia\Reactive\Operators\CombineLatest_3+_+FirstObserver $other [generic: TFirst,TSecond,TResult]
	 * @return \System\Void|void
	 */
	public function SetOther($other){}
	/**
	 * @param \TSecond $value
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