<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait KeyFrames_1Override {
	/**
	 * @param \System\Threading\Tasks\TaskCompletionSource_1 $tcs [generic: T]
	 */
	#[MethodOverride]public function __construct_1 ($tcs){}
	/**
	 * @param \System\Action_1 $onNext [generic: T]
	 * @param \System\Action_1 $onError [generic: System\Exception]
	 * @param \System\Action $onCompleted
	 */
	#[MethodOverride]public function __construct_2 ($onNext, $onError, $onCompleted){}
	/**
	 * @param \System\Action_1 $onNext [generic: T]
	 */
	#[MethodOverride]public function __construct_3 ($onNext){}
	/**
	 * @param \System\Action_1 $onNext [generic: T]
	 * @param \System\Action_1 $onError [generic: System\Exception]
	 */
	#[MethodOverride]public function __construct_4 ($onNext, $onError){}
	/**
	 * @param \System\Action_1 $onNext [generic: T]
	 * @param \System\Action $onCompleted
	 */
	#[MethodOverride]public function __construct_5 ($onNext, $onCompleted){}
}
class AnonymousObserver_1 extends \System\Object implements
	\System\IObserver_1
{
	use KeyFrames_1Override;


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
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function OnNext($value){}
	/**
	 * @uses AnonymousObserver_1Override::__construct_1 <br>public , args: ($tcs)<br>
	 * @uses AnonymousObserver_1Override::__construct_2 <br>public , args: ($onNext, $onError, $onCompleted)<br>
	 * @uses AnonymousObserver_1Override::__construct_3 <br>public , args: ($onNext)<br>
	 * @uses AnonymousObserver_1Override::__construct_4 <br>public , args: ($onNext, $onError)<br>
	 * @uses AnonymousObserver_1Override::__construct_5 <br>public , args: ($onNext, $onCompleted)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}