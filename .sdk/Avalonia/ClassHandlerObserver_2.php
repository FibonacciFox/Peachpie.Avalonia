<?php
namespace Avalonia;
class ClassHandlerObserver_2 extends \System\Object implements
	\System\IObserver_1
{


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
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs_1 $value [generic: TValue]
	 * @return \System\Void|void
	 */
	public function OnNext($value){}
	/**
	 * @param \System\Action_2 $action [generic: TTarget,Avalonia\AvaloniaPropertyChangedEventArgs_1[TValue]
	 */
	public function __construct($action){}
}