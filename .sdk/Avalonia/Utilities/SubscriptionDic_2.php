<?php
namespace Avalonia\Utilities;
class SubscriptionDic_2 extends \System\Collections\Generic\Dictionary_2 implements
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @property
	 * @var \System\Collections\Generic\IEqualityComparer_1[System\String]
	 * @since readonly
	 */
	public $Comparer;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\Dictionary_2+KeyCollection[System\String,Avalonia\Utilities\WeakEventHandlerManager+Subscription_2[T,TSubscriber]]
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Collections\Generic\Dictionary_2+ValueCollection[System\String,Avalonia\Utilities\WeakEventHandlerManager+Subscription_2[T,TSubscriber]]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \Avalonia\Utilities\WeakEventHandlerManager+Subscription_2[T,TSubscriber]
	 */
	public $Item;
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
	/**
	 */
	public function __construct(){}
}