<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExpressionNodeMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ValueChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ValueChanged_2($value, $notify){}
}
/**
 */
class ExpressionNode extends \System\Object
{
	/**
	 * @var \System\WeakReference_1[System\Object]
	 * @field
	 */
	protected readonly $UnsetReference;
	/**
	 * @var \System\WeakReference_1[System\Object]
	 * @field
	 */
	protected readonly $NullReference;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Description;
	/**
	 * @var \Avalonia\Data\Core\ExpressionNode
	 * @property
	 */
	public $Next;
	/**
	 * @var \System\WeakReference_1[System\Object]
	 * @property
	 */
	public $Target;
	/**
	 * @return \System\WeakReference_1
	 */
	protected  function get_LastValue(){}
	/**
	 * @param \System\WeakReference_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_LastValue($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Description(){}
	/**
	 * @return \Avalonia\Data\Core\ExpressionNode
	 */
	public  function get_Next(){}
	/**
	 * @param \Avalonia\Data\Core\ExpressionNode $value
	 * @return \System\Void|void
	 */
	public  function set_Next($value){}
	/**
	 * @return \System\WeakReference_1
	 */
	public  function get_Target(){}
	/**
	 * @param \System\WeakReference_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Target($value){}
	/**
	 * @param \System\Action_1 $subscriber
	 * @return \System\Void|void
	 */
	public  function Subscribe($subscriber){}
	/**
	 * @return \System\Void|void
	 */
	public  function Unsubscribe(){}
	/**
	 * @param \System\WeakReference_1 $reference
	 * @return \System\Void|void
	 */
	protected  function StartListeningCore($reference){}
	/**
	 * @return \System\Void|void
	 */
	protected  function StopListeningCore(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function NextValueChanged($value){}
	/**
	 * @uses ExpressionNodeMethodsOverride::ValueChanged_1 ($value)
	 * @uses ExpressionNodeMethodsOverride::ValueChanged_2 ($value, $notify)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ValueChanged(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartListening(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StopListening(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TargetNullNotification(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
