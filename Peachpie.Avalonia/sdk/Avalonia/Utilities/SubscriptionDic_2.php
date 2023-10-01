<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SubscriptionDic_2MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\KeyCollection
	 */
	#[MethodOverride] public  function get_Keys_1(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] private  function get_Keys_2(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Keys_3(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Keys_4(){}
	/**
	 * @return \System\Collections\Generic\ValueCollection
	 */
	#[MethodOverride] public  function get_Values_1(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] private  function get_Values_2(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Values_3(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Values_4(){}
	/**
	 * @return \Avalonia\Utilities\Subscription_2
	 */
	#[MethodOverride] public  function get_Item_1($key){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_2($key){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_2($keyValuePair){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_3($key, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_1($keyValuePair){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_1($keyValuePair){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_2($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_3($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_4($key){}
	/**
	 * @return \System\Collections\Generic\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_4(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TrimExcess_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function TrimExcess_2($capacity){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
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
	 * @uses SubscriptionDic_2MethodsOverride::get_Keys_1 ()
	 * @uses SubscriptionDic_2MethodsOverride::get_Keys_2 ()
	 * @uses SubscriptionDic_2MethodsOverride::get_Keys_3 ()
	 * @uses SubscriptionDic_2MethodsOverride::get_Keys_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Keys(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::get_Values_1 ()
	 * @uses SubscriptionDic_2MethodsOverride::get_Values_2 ()
	 * @uses SubscriptionDic_2MethodsOverride::get_Values_3 ()
	 * @uses SubscriptionDic_2MethodsOverride::get_Values_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Values(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::get_Item_1 ($key)
	 * @uses SubscriptionDic_2MethodsOverride::get_Item_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::set_Item_1 ($key, $value)
	 * @uses SubscriptionDic_2MethodsOverride::set_Item_2 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::Add_1 ($key, $value)
	 * @uses SubscriptionDic_2MethodsOverride::Add_2 ($keyValuePair)
	 * @uses SubscriptionDic_2MethodsOverride::Add_3 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::Contains_1 ($keyValuePair)
	 * @uses SubscriptionDic_2MethodsOverride::Contains_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::Remove_1 ($keyValuePair)
	 * @uses SubscriptionDic_2MethodsOverride::Remove_2 ($key)
	 * @uses SubscriptionDic_2MethodsOverride::Remove_3 ($key, $value)
	 * @uses SubscriptionDic_2MethodsOverride::Remove_4 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::GetEnumerator_1 ()
	 * @uses SubscriptionDic_2MethodsOverride::GetEnumerator_2 ()
	 * @uses SubscriptionDic_2MethodsOverride::GetEnumerator_3 ()
	 * @uses SubscriptionDic_2MethodsOverride::GetEnumerator_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::get_IsReadOnly_1 ()
	 * @uses SubscriptionDic_2MethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::CopyTo_1 ($array, $index)
	 * @uses SubscriptionDic_2MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses SubscriptionDic_2MethodsOverride::TrimExcess_1 ()
	 * @uses SubscriptionDic_2MethodsOverride::TrimExcess_2 ($capacity)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrimExcess(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSynchronized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncRoot(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
}
