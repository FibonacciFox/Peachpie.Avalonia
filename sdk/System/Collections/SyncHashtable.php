<?php
namespace System\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SyncHashtableMethodsOverride
{
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
}
/**
 */
class SyncHashtable extends \System\Collections\Hashtable implements 
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\ICloneable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
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
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
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
	 * @uses SyncHashtableMethodsOverride::GetEnumerator_1 ()
	 * @uses SyncHashtableMethodsOverride::GetEnumerator_2 ()
	 * @uses SyncHashtableMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
}
