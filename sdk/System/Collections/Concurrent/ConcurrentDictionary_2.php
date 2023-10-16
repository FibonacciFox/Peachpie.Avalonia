<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConcurrentDictionary_2MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryRemove_1($key, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryRemove_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Collections\Concurrent\TValue
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
	 * @return \System\Collections\Concurrent\TValue
	 */
	#[MethodOverride] public  function GetOrAdd_1($key, $valueFactory){}
	/**
	 * @return \System\Collections\Concurrent\TValue
	 */
	#[MethodOverride] public  function GetOrAdd_2($key, $valueFactory, $factoryArgument){}
	/**
	 * @return \System\Collections\Concurrent\TValue
	 */
	#[MethodOverride] public  function GetOrAdd_3($key, $value){}
	/**
	 * @return \System\Collections\Concurrent\TValue
	 */
	#[MethodOverride] public  function AddOrUpdate_1($key, $addValueFactory, $updateValueFactory, $factoryArgument){}
	/**
	 * @return \System\Collections\Concurrent\TValue
	 */
	#[MethodOverride] public  function AddOrUpdate_2($key, $addValueFactory, $updateValueFactory){}
	/**
	 * @return \System\Collections\Concurrent\TValue
	 */
	#[MethodOverride] public  function AddOrUpdate_3($key, $addValue, $updateValueFactory){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_1($key, $value){}
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
	#[MethodOverride] private  function Remove_1($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_2($keyValuePair){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_3($key){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] public  function get_Keys_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Keys_2(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Keys_3(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	#[MethodOverride] public  function get_Values_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private  function get_Values_2(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] private  function get_Values_3(){}
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
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ConcurrentDictionary_2 extends \System\Object implements 
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	/**
	 * @var \TValue
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Collections\Generic\IEqualityComparer_1[TKey]
	 * @property
	 */
	public readonly $Comparer;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEmpty;
	/**
	 * @var \System\Collections\Generic\ICollection_1[TKey]
	 * @property
	 */
	public readonly $Keys;
	/**
	 * @var \System\Collections\Generic\ICollection_1[TValue]
	 * @property
	 */
	public readonly $Values;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValueWriteAtomic(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeFromCollection($collection){}
	/**
	 * @param \System\Collections\Concurrent\TKey $key
	 * @param \System\Collections\Concurrent\TValue $value
	 * @return \System\Boolean
	 */
	public  function TryAdd($key, $value){}
	/**
	 * @param \System\Collections\Concurrent\TKey $key
	 * @return \System\Boolean
	 */
	public  function ContainsKey($key){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::TryRemove_1 ($key, $value)
	 * @uses ConcurrentDictionary_2MethodsOverride::TryRemove_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryRemove(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\TKey $key
	 * @param \System\Collections\Concurrent\TValue& $value
	 * @param \System\Boolean $matchValue
	 * @param \System\Collections\Concurrent\TValue $oldValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryRemoveInternal($key, $value, $matchValue, $oldValue){}
	/**
	 * @param \System\Collections\Concurrent\TKey $key
	 * @param \System\Collections\Concurrent\TValue& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @param \System\Collections\Concurrent\TKey $key
	 * @param \System\Int32|int $hashcode
	 * @param \System\Collections\Concurrent\TValue& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetValueInternal($key, $hashcode, $value){}
	/**
	 * @param \System\Collections\Concurrent\TKey $key
	 * @param \System\Collections\Concurrent\TValue $newValue
	 * @param \System\Collections\Concurrent\TValue $comparisonValue
	 * @return \System\Boolean
	 */
	public  function TryUpdate($key, $newValue, $comparisonValue){}
	/**
	 * @param \System\Collections\Concurrent\TKey $key
	 * @param \System\Nullable_1 $nullableHashcode
	 * @param \System\Collections\Concurrent\TValue $newValue
	 * @param \System\Collections\Concurrent\TValue $comparisonValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryUpdateInternal($key, $nullableHashcode, $newValue, $comparisonValue){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::CopyTo_1 ($array, $index)
	 * @uses ConcurrentDictionary_2MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\KeyValuePair_2[]
	 */
	public  function ToArray(){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2[] $array
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyToPairs($array, $index){}
	/**
	 * @param \System\Collections\DictionaryEntry[] $array
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyToEntries($array, $index){}
	/**
	 * @param \System\Object[] $array
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyToObjects($array, $index){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::GetEnumerator_1 ()
	 * @uses ConcurrentDictionary_2MethodsOverride::GetEnumerator_2 ()
	 * @uses ConcurrentDictionary_2MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\TKey $key
	 * @param \System\Nullable_1 $nullableHashcode
	 * @param \System\Collections\Concurrent\TValue $value
	 * @param \System\Boolean $updateIfExists
	 * @param \System\Boolean $acquireLock
	 * @param \System\Collections\Concurrent\TValue& $resultingValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryAddInternal($key, $nullableHashcode, $value, $updateIfExists, $acquireLock, $resultingValue){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::get_Item_1 ($key)
	 * @uses ConcurrentDictionary_2MethodsOverride::get_Item_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::set_Item_1 ($key, $value)
	 * @uses ConcurrentDictionary_2MethodsOverride::set_Item_2 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\TKey $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowKeyNotFoundException($key){}
	/**
	 * @return \System\Collections\Generic\IEqualityComparer_1
	 */
	public  function get_Comparer(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCountInternal(){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::GetOrAdd_1 ($key, $valueFactory)
	 * @uses ConcurrentDictionary_2MethodsOverride::GetOrAdd_2 ($key, $valueFactory, $factoryArgument)
	 * @uses ConcurrentDictionary_2MethodsOverride::GetOrAdd_3 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetOrAdd(mixed ...$args){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::AddOrUpdate_1 ($key, $addValueFactory, $updateValueFactory, $factoryArgument)
	 * @uses ConcurrentDictionary_2MethodsOverride::AddOrUpdate_2 ($key, $addValueFactory, $updateValueFactory)
	 * @uses ConcurrentDictionary_2MethodsOverride::AddOrUpdate_3 ($key, $addValue, $updateValueFactory)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddOrUpdate(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEmpty(){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::Add_1 ($key, $value)
	 * @uses ConcurrentDictionary_2MethodsOverride::Add_2 ($keyValuePair)
	 * @uses ConcurrentDictionary_2MethodsOverride::Add_3 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::Remove_1 ($key)
	 * @uses ConcurrentDictionary_2MethodsOverride::Remove_2 ($keyValuePair)
	 * @uses ConcurrentDictionary_2MethodsOverride::Remove_3 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::get_Keys_1 ()
	 * @uses ConcurrentDictionary_2MethodsOverride::get_Keys_2 ()
	 * @uses ConcurrentDictionary_2MethodsOverride::get_Keys_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Keys(mixed ...$args){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::get_Values_1 ()
	 * @uses ConcurrentDictionary_2MethodsOverride::get_Values_2 ()
	 * @uses ConcurrentDictionary_2MethodsOverride::get_Values_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Values(mixed ...$args){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::Contains_1 ($keyValuePair)
	 * @uses ConcurrentDictionary_2MethodsOverride::Contains_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses ConcurrentDictionary_2MethodsOverride::get_IsReadOnly_1 ()
	 * @uses ConcurrentDictionary_2MethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowIfInvalidObjectValue($value){}
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
	#[MethodPrivate]  function AreAllBucketsEmpty(){}
	/**
	 * @param \System\Collections\Concurrent\Tables $tables
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GrowTable($tables){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_DefaultConcurrencyLevel(){}
	/**
	 * @param \System\Int32& $locksAcquired
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AcquireAllLocks($locksAcquired){}
	/**
	 * @param \System\Int32|int $fromInclusive
	 * @param \System\Int32|int $toExclusive
	 * @param \System\Int32& $locksAcquired
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AcquireLocks($fromInclusive, $toExclusive, $locksAcquired){}
	/**
	 * @param \System\Int32|int $fromInclusive
	 * @param \System\Int32|int $toExclusive
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseLocks($fromInclusive, $toExclusive){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetKeys(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValues(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
