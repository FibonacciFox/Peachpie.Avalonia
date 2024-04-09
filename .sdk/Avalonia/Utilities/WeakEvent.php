<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WeakEventOverride {
	/**
	 * @deprecated
	 * @param \System\Action_2 $subscribe [generic: TSender,System\EventHandler_1[TEventArgs]
	 * @param \System\Action_2 $unsubscribe [generic: TSender,System\EventHandler_1[TEventArgs]
	 * @return \Avalonia\Utilities\WeakEvent_2
	 */
	#[MethodOverride]public static function Register_1 ($subscribe, $unsubscribe){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $subscribe [generic: TSender,System\EventHandler_1[TEventArgs]
	 * @return \Avalonia\Utilities\WeakEvent_2
	 */
	#[MethodOverride]public static function Register_2 ($subscribe){}
	/**
	 * @deprecated
	 * @param \System\Action_2 $subscribe [generic: TSender,System\EventHandler]
	 * @param \System\Action_2 $unsubscribe [generic: TSender,System\EventHandler]
	 * @return \Avalonia\Utilities\WeakEvent_2
	 */
	#[MethodOverride]public static function Register_3 ($subscribe, $unsubscribe){}
}
class WeakEvent extends \System\Object
{
	use WeakEventOverride;

	/**
	 * @uses WeakEventOverride::Register_1 <br>public , args: ($subscribe, $unsubscribe)<br>
	 * @uses WeakEventOverride::Register_2 <br>public , args: ($subscribe)<br>
	 * @uses WeakEventOverride::Register_3 <br>public , args: ($subscribe, $unsubscribe)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Utilities\WeakEvent_2|mixed|\override
	 */
	#[MethodOverridePublic]function Register (\override ...$args){}
	/**
	 */
	public function __construct(){}
}