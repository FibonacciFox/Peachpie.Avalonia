<?php
namespace Avalonia\Animation;
/**
 */
class TransitionClock extends \Avalonia\Animation\ClockBase implements 
	\Avalonia\Animation\IClock,
	\System\IObservable_1,
	\System\IObserver_1
{
	/**
	 * @var \Avalonia\Animation\PlayState
	 * @property
	 */
	public $PlayState;
	/**
	 * @param \System\TimeSpan $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnNext($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnError($error){}
}
