<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ExpressionNodeOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function ValueChanged_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Boolean|bool $notify
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ValueChanged_2 ($value, $notify){}
}
class ExpressionNode extends \System\Object
{
	use ExpressionNodeOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\WeakReference_1[System\Object]
	 */
	protected static $UnsetReference;
	/**
	 * @field
	 * @since readonly
	 * @var \System\WeakReference_1[System\Object]
	 */
	protected static $NullReference;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @property
	 * @var \Avalonia\Data\Core\ExpressionNode
	 */
	public $Next;
	/**
	 * @property
	 * @var \System\WeakReference_1[System\Object]
	 */
	public $Target;
	/**
	 * @param \System\Action_1 $subscriber [generic: System\Object]
	 * @return \System\Void|void
	 */
	public function Subscribe($subscriber){}
	/**
	 * @return \System\Void|void
	 */
	public function Unsubscribe(){}
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @return \System\Void|void
	 */
	protected function StartListeningCore($reference){}
	/**
	 * @return \System\Void|void
	 */
	protected function StopListeningCore(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected function NextValueChanged($value){}
	/**
	 * @uses ExpressionNodeOverride::ValueChanged_1 <br>protected , args: ($value)<br>
	 * @uses ExpressionNodeOverride::ValueChanged_2 <br>private , args: ($value, $notify)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ValueChanged (\override ...$args){}
	private function StartListening(){}
	private function StopListening(){}
	private static function TargetNullNotification(){}
}