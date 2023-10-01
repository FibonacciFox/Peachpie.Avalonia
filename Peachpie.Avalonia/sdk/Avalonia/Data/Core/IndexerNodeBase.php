<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IndexerNodeBaseMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function ShouldUpdate_1($sender, $e){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function ShouldUpdate_2($sender, $e){}
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
class IndexerNodeBase extends \Avalonia\Data\Core\SettableNode implements 
	\Avalonia\Utilities\IWeakEventSubscriber_1,
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @param \System\Object|object $target
	 * @return \System\Object|object
	 */
	protected  function GetValue($target){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function TryGetFirstArgumentAsInt(){}
	/**
	 * @uses IndexerNodeBaseMethodsOverride::ShouldUpdate_1 ($sender, $e)
	 * @uses IndexerNodeBaseMethodsOverride::ShouldUpdate_2 ($sender, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ShouldUpdate(mixed ...$args){}
	/**
	 * @uses IndexerNodeBaseMethodsOverride::OnEvent_1 ($sender, $ev, $e)
	 * @uses IndexerNodeBaseMethodsOverride::OnEvent_2 ($sender, $ev, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnEvent(mixed ...$args){}
}
