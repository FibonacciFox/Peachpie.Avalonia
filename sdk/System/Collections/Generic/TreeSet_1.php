<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TreeSet_1MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Add_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($array, $index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_4($array, $index){}
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
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function GetObjectData_1($info, $context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function GetObjectData_2($info, $context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnDeserialization_1($sender){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OnDeserialization_2($sender){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class TreeSet_1 extends \System\Collections\Generic\SortedSet_1 implements 
	\System\Collections\Generic\ISet_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IReadOnlySet_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\IComparer_1[T]
	 * @property
	 */
	public readonly $Comparer;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Min;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Max;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
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
	 * @uses TreeSet_1MethodsOverride::Add_1 ($item)
	 * @uses TreeSet_1MethodsOverride::Add_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses TreeSet_1MethodsOverride::CopyTo_1 ($array)
	 * @uses TreeSet_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @uses TreeSet_1MethodsOverride::CopyTo_3 ($array, $index, $count)
	 * @uses TreeSet_1MethodsOverride::CopyTo_4 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses TreeSet_1MethodsOverride::GetEnumerator_1 ()
	 * @uses TreeSet_1MethodsOverride::GetEnumerator_2 ()
	 * @uses TreeSet_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses TreeSet_1MethodsOverride::GetObjectData_1 ($info, $context)
	 * @uses TreeSet_1MethodsOverride::GetObjectData_2 ($info, $context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetObjectData(mixed ...$args){}
	/**
	 * @uses TreeSet_1MethodsOverride::OnDeserialization_1 ($sender)
	 * @uses TreeSet_1MethodsOverride::OnDeserialization_2 ($sender)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnDeserialization(mixed ...$args){}
}
