<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait IndexerNodeBaseOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function ShouldUpdate_1 ($sender, $e){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function ShouldUpdate_2 ($sender, $e){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Utilities\WeakEvent $ev
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnEvent_1 ($sender, $ev, $e){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Utilities\WeakEvent $ev
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnEvent_2 ($sender, $ev, $e){}
}
class IndexerNodeBase extends \Avalonia\Data\Core\SettableNode implements
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	use IndexerNodeBaseOverride;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $PropertyType;
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
	 * @param \System\Object|object $target
	 * @return \System\Object|object
	 */
	abstract protected function GetValue($target);
	/**
	 * @return \System\Nullable_1[System\Int32]
	 */
	abstract protected function TryGetFirstArgumentAsInt();
	/**
	 * @uses IndexerNodeBaseOverride::ShouldUpdate_1 <br>private , args: ($sender, $e)<br>
	 * @uses IndexerNodeBaseOverride::ShouldUpdate_2 <br>protected , args: ($sender, $e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function ShouldUpdate (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses IndexerNodeBaseOverride::OnEvent_1 <br>private , args: ($sender, $ev, $e)<br>
	 * @uses IndexerNodeBaseOverride::OnEvent_2 <br>private , args: ($sender, $ev, $e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function OnEvent (\override ...$args){}
}