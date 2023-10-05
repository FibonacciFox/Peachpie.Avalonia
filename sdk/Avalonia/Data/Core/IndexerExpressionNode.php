<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IndexerExpressionNodeMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnEvent_1($sender, $ev, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnEvent_2($sender, $ev, $e){}
}
/**
 */
class IndexerExpressionNode extends \Avalonia\Data\Core\IndexerNodeBase implements 
	\Avalonia\Utilities\IWeakEventSubscriber_1,
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
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
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function ShouldUpdate($sender, $e){}
	/**
	 * @uses IndexerExpressionNodeMethodsOverride::OnEvent_1 ($sender, $ev, $e)
	 * @uses IndexerExpressionNodeMethodsOverride::OnEvent_2 ($sender, $ev, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnEvent(mixed ...$args){}
}
