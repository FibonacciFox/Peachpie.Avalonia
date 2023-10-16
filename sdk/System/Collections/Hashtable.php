<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HashtableMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function rehash_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function rehash_2($newsize){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
}
/**
 */
class Hashtable extends \System\Object implements 
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\ICloneable
{
	/**
	 * @var \System\Collections\IHashCodeProvider
	 * @property
	 */
	protected $hcp;
	/**
	 * @var \System\Collections\IComparer
	 * @property
	 */
	protected $comparer;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFixedSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Collections\ICollection
	 * @property
	 */
	public readonly $Keys;
	/**
	 * @var \System\Collections\ICollection
	 * @property
	 */
	public readonly $Values;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @return \System\Collections\IHashCodeProvider
	 */
	protected  function get_hcp(){}
	/**
	 * @param \System\Collections\IHashCodeProvider $value
	 * @return \System\Void|void
	 */
	protected  function set_hcp($value){}
	/**
	 * @return \System\Collections\IComparer
	 */
	protected  function get_comparer(){}
	/**
	 * @param \System\Collections\IComparer $value
	 * @return \System\Void|void
	 */
	protected  function set_comparer($value){}
	/**
	 * @return \System\Collections\IEqualityComparer
	 */
	protected  function get_EqualityComparer(){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Int32|int $hashsize
	 * @param \System\UInt32& $seed
	 * @param \System\UInt32& $incr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitHash($key, $hashsize, $seed, $incr){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function Add($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean
	 */
	public  function Contains($key){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean
	 */
	public  function ContainsKey($key){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public  function ContainsValue($value){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyKeys($array, $arrayIndex){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyEntries($array, $arrayIndex){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $arrayIndex){}
	/**
	 * @return \System\Collections\KeyValuePairs[]
	 */
	protected  function ToKeyValuePairsArray(){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyValues($array, $arrayIndex){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	public  function get_Item($key){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Item($key, $value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function expand(){}
	/**
	 * @uses HashtableMethodsOverride::rehash_1 ()
	 * @uses HashtableMethodsOverride::rehash_2 ($newsize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function rehash(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateVersion(){}
	/**
	 * @uses HashtableMethodsOverride::GetEnumerator_1 ()
	 * @uses HashtableMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Int32|int
	 */
	protected  function GetHash($key){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFixedSize(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Object|object $key
	 * @return \System\Boolean
	 */
	protected  function KeyEquals($item, $key){}
	/**
	 * @return \System\Collections\ICollection
	 */
	public  function get_Keys(){}
	/**
	 * @return \System\Collections\ICollection
	 */
	public  function get_Values(){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $nvalue
	 * @param \System\Boolean $add
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Insert($key, $nvalue, $add){}
	/**
	 * @param \System\Collections\Bucket[] $newBuckets
	 * @param \System\Object|object $key
	 * @param \System\Object|object $nvalue
	 * @param \System\Int32|int $hashcode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function putEntry($newBuckets, $key, $nvalue, $hashcode){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Void|void
	 */
	public  function Remove($key){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Collections\Hashtable $table
	 * @return \System\Collections\Hashtable
	 */
	public static function Synchronized($table){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	public  function OnDeserialization($sender){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
