<?php
namespace Avalonia\Animation\Animators;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EffectAnimatorBase_1MethodsOverride
{
	/**
	 * @return \Avalonia\Animation\Animators\T
	 */
	#[MethodOverride] protected  function Interpolate_1($progress, $oldValue, $newValue){}
	/**
	 * @return \Avalonia\Media\IEffect
	 */
	#[MethodOverride] public  function Interpolate_2($progress, $oldValue, $newValue){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function get_Count_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function get_Count_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \Avalonia\Animation\AnimatorKeyFrame
	 */
	#[MethodOverride] public  function get_Item_1($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_2($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Add_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Clear_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \Avalonia\Collections\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_3(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_1($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IndexOf_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Insert_1($index, $item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_2($index, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAt_1($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveAt_2($index){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class EffectAnimatorBase_1 extends \Avalonia\Animation\Animators\Animator_1 implements 
	\Avalonia\Collections\IAvaloniaList_1,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Collections\IAvaloniaReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\System\ComponentModel\INotifyPropertyChanged,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\Avalonia\Diagnostics\INotifyCollectionChangedDebug,
	\Avalonia\Animation\IAnimator
{
	/**
	 * @var \Avalonia\AvaloniaProperty
	 * @property
	 */
	public $Property;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \Avalonia\Collections\ResetBehavior
	 * @property
	 */
	public $ResetBehavior;
	/**
	 * @var \System\Action_1[Avalonia\Animation\AnimatorKeyFrame]
	 * @property
	 */
	public $Validate;
	/**
	 * @var \Avalonia\Animation\AnimatorKeyFrame
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Capacity;
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::Interpolate_1 ($progress, $oldValue, $newValue)
	 * @uses EffectAnimatorBase_1MethodsOverride::Interpolate_2 ($progress, $oldValue, $newValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Interpolate(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::get_Count_1 ()
	 * @uses EffectAnimatorBase_1MethodsOverride::get_Count_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Count(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::get_IsReadOnly_1 ()
	 * @uses EffectAnimatorBase_1MethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
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
	 * @uses EffectAnimatorBase_1MethodsOverride::get_Item_1 ($index)
	 * @uses EffectAnimatorBase_1MethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::set_Item_1 ($index, $value)
	 * @uses EffectAnimatorBase_1MethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::Add_1 ($item)
	 * @uses EffectAnimatorBase_1MethodsOverride::Add_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::Clear_1 ()
	 * @uses EffectAnimatorBase_1MethodsOverride::Clear_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::Contains_1 ($item)
	 * @uses EffectAnimatorBase_1MethodsOverride::Contains_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses EffectAnimatorBase_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::GetEnumerator_1 ()
	 * @uses EffectAnimatorBase_1MethodsOverride::GetEnumerator_2 ()
	 * @uses EffectAnimatorBase_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::IndexOf_1 ($item)
	 * @uses EffectAnimatorBase_1MethodsOverride::IndexOf_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::Insert_1 ($index, $item)
	 * @uses EffectAnimatorBase_1MethodsOverride::Insert_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::Remove_1 ($item)
	 * @uses EffectAnimatorBase_1MethodsOverride::Remove_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses EffectAnimatorBase_1MethodsOverride::RemoveAt_1 ($index)
	 * @uses EffectAnimatorBase_1MethodsOverride::RemoveAt_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAt(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCollectionChangedSubscribers(){}
}
