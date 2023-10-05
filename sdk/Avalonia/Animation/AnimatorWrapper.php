<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AnimatorWrapperMethodsOverride
{
	/**
	 * @return \Avalonia\Animation\T
	 */
	#[MethodOverride] public  function Interpolate_1($progress, $oldValue, $newValue){}
	/**
	 * @return \Avalonia\Animation\T
	 */
	#[MethodOverride] public  function Interpolate_2($progress, $oldValue, $newValue){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function get_Property_1(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function get_Property_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Property_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Property_2($value){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Apply_1($animation, $control, $clock, $match, $onComplete){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Apply_2($animation, $control, $clock, $match, $onComplete){}
	/**
	 * @return \Avalonia\Animation\T
	 */
	#[MethodOverride] protected  function InterpolationHandler_1($animationTime, $neutralValue){}
	/**
	 * @return \Avalonia\Animation\T
	 */
	#[MethodOverride] protected  function InterpolationHandler_2($animationTime, $neutralValue){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function BindAnimation_1($control, $instance){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function BindAnimation_2($control, $instance){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] protected  function Run_1($animation, $control, $clock, $onComplete){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] protected  function Run_2($animation, $control, $clock, $onComplete){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_CollectionChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_CollectionChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_CollectionChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_CollectionChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_PropertyChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_PropertyChanged_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function get_Count_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function get_Count_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function get_Count_3(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function get_Count_4(){}
	/**
	 * @return \Avalonia\Collections\ResetBehavior
	 */
	#[MethodOverride] public  function get_ResetBehavior_1(){}
	/**
	 * @return \Avalonia\Collections\ResetBehavior
	 */
	#[MethodOverride] public  function get_ResetBehavior_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_ResetBehavior_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_ResetBehavior_2($value){}
	/**
	 * @return \System\Action_1
	 */
	#[MethodOverride] public  function get_Validate_1(){}
	/**
	 * @return \System\Action_1
	 */
	#[MethodOverride] public  function get_Validate_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Validate_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Validate_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsFixedSize_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsFixedSize_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_3(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_4(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsSynchronized_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsSynchronized_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_SyncRoot_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_SyncRoot_2(){}
	/**
	 * @return \Avalonia\Animation\AnimatorKeyFrame
	 */
	#[MethodOverride] public  function get_Item_1($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_2($index){}
	/**
	 * @return \Avalonia\Animation\AnimatorKeyFrame
	 */
	#[MethodOverride] public  function get_Item_3($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_4($index){}
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
	#[MethodOverride] public  function set_Item_3($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_4($index, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function get_Capacity_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function get_Capacity_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Capacity_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Capacity_2($value){}
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
	#[MethodOverride] public  function Add_3($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Add_4($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddRange_1($items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddRange_2($items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Clear_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Clear_3(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_4(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_3($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_4($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_4($array, $index){}
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
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_4(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_5(){}
	/**
	 * @return \Avalonia\Collections\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_6(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function GetRange_1($index, $count){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function GetRange_2($index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_1($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IndexOf_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_3($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IndexOf_4($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Insert_1($index, $item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_2($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Insert_3($index, $item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_4($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function InsertRange_1($index, $items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function InsertRange_2($index, $items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Move_1($oldIndex, $newIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Move_2($oldIndex, $newIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MoveRange_1($oldIndex, $count, $newIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MoveRange_2($oldIndex, $count, $newIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnsureCapacity_1($capacity){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function EnsureCapacity_2($capacity){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_3($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_4($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAll_1($items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAll_2($items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAt_1($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveAt_2($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAt_3($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveAt_4($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveRange_1($index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveRange_2($index, $count){}
	/**
	 * @return \System\Delegate[]
	 */
	#[MethodOverride] private  function GetCollectionChangedSubscribers_1(){}
	/**
	 * @return \System\Delegate[]
	 */
	#[MethodOverride] private  function GetCollectionChangedSubscribers_2(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Finalize_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Finalize_2(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
}
/**
 */
class AnimatorWrapper extends \Avalonia\Animation\Animators\Animator_1 implements 
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
	 * @uses AnimatorWrapperMethodsOverride::Interpolate_1 ($progress, $oldValue, $newValue)
	 * @uses AnimatorWrapperMethodsOverride::Interpolate_2 ($progress, $oldValue, $newValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Interpolate(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_Property_1 ()
	 * @uses AnimatorWrapperMethodsOverride::get_Property_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Property(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::set_Property_1 ($value)
	 * @uses AnimatorWrapperMethodsOverride::set_Property_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Property(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Apply_1 ($animation, $control, $clock, $match, $onComplete)
	 * @uses AnimatorWrapperMethodsOverride::Apply_2 ($animation, $control, $clock, $match, $onComplete)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Apply(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::InterpolationHandler_1 ($animationTime, $neutralValue)
	 * @uses AnimatorWrapperMethodsOverride::InterpolationHandler_2 ($animationTime, $neutralValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InterpolationHandler(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::BindAnimation_1 ($control, $instance)
	 * @uses AnimatorWrapperMethodsOverride::BindAnimation_2 ($control, $instance)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BindAnimation(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Run_1 ($animation, $control, $clock, $onComplete)
	 * @uses AnimatorWrapperMethodsOverride::Run_2 ($animation, $control, $clock, $onComplete)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Run(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::add_CollectionChanged_1 ($value)
	 * @uses AnimatorWrapperMethodsOverride::add_CollectionChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_CollectionChanged(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::remove_CollectionChanged_1 ($value)
	 * @uses AnimatorWrapperMethodsOverride::remove_CollectionChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_CollectionChanged(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses AnimatorWrapperMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses AnimatorWrapperMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_Count_1 ()
	 * @uses AnimatorWrapperMethodsOverride::get_Count_2 ()
	 * @uses AnimatorWrapperMethodsOverride::get_Count_3 ()
	 * @uses AnimatorWrapperMethodsOverride::get_Count_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Count(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_ResetBehavior_1 ()
	 * @uses AnimatorWrapperMethodsOverride::get_ResetBehavior_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_ResetBehavior(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::set_ResetBehavior_1 ($value)
	 * @uses AnimatorWrapperMethodsOverride::set_ResetBehavior_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_ResetBehavior(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_Validate_1 ()
	 * @uses AnimatorWrapperMethodsOverride::get_Validate_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Validate(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::set_Validate_1 ($value)
	 * @uses AnimatorWrapperMethodsOverride::set_Validate_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Validate(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_IsFixedSize_1 ()
	 * @uses AnimatorWrapperMethodsOverride::get_IsFixedSize_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsFixedSize(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_IsReadOnly_1 ()
	 * @uses AnimatorWrapperMethodsOverride::get_IsReadOnly_2 ()
	 * @uses AnimatorWrapperMethodsOverride::get_IsReadOnly_3 ()
	 * @uses AnimatorWrapperMethodsOverride::get_IsReadOnly_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_IsSynchronized_1 ()
	 * @uses AnimatorWrapperMethodsOverride::get_IsSynchronized_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsSynchronized(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_SyncRoot_1 ()
	 * @uses AnimatorWrapperMethodsOverride::get_SyncRoot_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SyncRoot(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_Item_1 ($index)
	 * @uses AnimatorWrapperMethodsOverride::get_Item_2 ($index)
	 * @uses AnimatorWrapperMethodsOverride::get_Item_3 ($index)
	 * @uses AnimatorWrapperMethodsOverride::get_Item_4 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::set_Item_1 ($index, $value)
	 * @uses AnimatorWrapperMethodsOverride::set_Item_2 ($index, $value)
	 * @uses AnimatorWrapperMethodsOverride::set_Item_3 ($index, $value)
	 * @uses AnimatorWrapperMethodsOverride::set_Item_4 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::get_Capacity_1 ()
	 * @uses AnimatorWrapperMethodsOverride::get_Capacity_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Capacity(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::set_Capacity_1 ($value)
	 * @uses AnimatorWrapperMethodsOverride::set_Capacity_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Capacity(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Add_1 ($item)
	 * @uses AnimatorWrapperMethodsOverride::Add_2 ($value)
	 * @uses AnimatorWrapperMethodsOverride::Add_3 ($item)
	 * @uses AnimatorWrapperMethodsOverride::Add_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::AddRange_1 ($items)
	 * @uses AnimatorWrapperMethodsOverride::AddRange_2 ($items)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddRange(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Clear_1 ()
	 * @uses AnimatorWrapperMethodsOverride::Clear_2 ()
	 * @uses AnimatorWrapperMethodsOverride::Clear_3 ()
	 * @uses AnimatorWrapperMethodsOverride::Clear_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Contains_1 ($item)
	 * @uses AnimatorWrapperMethodsOverride::Contains_2 ($value)
	 * @uses AnimatorWrapperMethodsOverride::Contains_3 ($item)
	 * @uses AnimatorWrapperMethodsOverride::Contains_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses AnimatorWrapperMethodsOverride::CopyTo_2 ($array, $index)
	 * @uses AnimatorWrapperMethodsOverride::CopyTo_3 ($array, $arrayIndex)
	 * @uses AnimatorWrapperMethodsOverride::CopyTo_4 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::GetEnumerator_1 ()
	 * @uses AnimatorWrapperMethodsOverride::GetEnumerator_2 ()
	 * @uses AnimatorWrapperMethodsOverride::GetEnumerator_3 ()
	 * @uses AnimatorWrapperMethodsOverride::GetEnumerator_4 ()
	 * @uses AnimatorWrapperMethodsOverride::GetEnumerator_5 ()
	 * @uses AnimatorWrapperMethodsOverride::GetEnumerator_6 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::GetRange_1 ($index, $count)
	 * @uses AnimatorWrapperMethodsOverride::GetRange_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRange(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::IndexOf_1 ($item)
	 * @uses AnimatorWrapperMethodsOverride::IndexOf_2 ($value)
	 * @uses AnimatorWrapperMethodsOverride::IndexOf_3 ($item)
	 * @uses AnimatorWrapperMethodsOverride::IndexOf_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Insert_1 ($index, $item)
	 * @uses AnimatorWrapperMethodsOverride::Insert_2 ($index, $value)
	 * @uses AnimatorWrapperMethodsOverride::Insert_3 ($index, $item)
	 * @uses AnimatorWrapperMethodsOverride::Insert_4 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::InsertRange_1 ($index, $items)
	 * @uses AnimatorWrapperMethodsOverride::InsertRange_2 ($index, $items)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InsertRange(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Move_1 ($oldIndex, $newIndex)
	 * @uses AnimatorWrapperMethodsOverride::Move_2 ($oldIndex, $newIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Move(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::MoveRange_1 ($oldIndex, $count, $newIndex)
	 * @uses AnimatorWrapperMethodsOverride::MoveRange_2 ($oldIndex, $count, $newIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MoveRange(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::EnsureCapacity_1 ($capacity)
	 * @uses AnimatorWrapperMethodsOverride::EnsureCapacity_2 ($capacity)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnsureCapacity(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Remove_1 ($item)
	 * @uses AnimatorWrapperMethodsOverride::Remove_2 ($value)
	 * @uses AnimatorWrapperMethodsOverride::Remove_3 ($item)
	 * @uses AnimatorWrapperMethodsOverride::Remove_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::RemoveAll_1 ($items)
	 * @uses AnimatorWrapperMethodsOverride::RemoveAll_2 ($items)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAll(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::RemoveAt_1 ($index)
	 * @uses AnimatorWrapperMethodsOverride::RemoveAt_2 ($index)
	 * @uses AnimatorWrapperMethodsOverride::RemoveAt_3 ($index)
	 * @uses AnimatorWrapperMethodsOverride::RemoveAt_4 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAt(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::RemoveRange_1 ($index, $count)
	 * @uses AnimatorWrapperMethodsOverride::RemoveRange_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveRange(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::GetCollectionChangedSubscribers_1 ()
	 * @uses AnimatorWrapperMethodsOverride::GetCollectionChangedSubscribers_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCollectionChangedSubscribers(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::GetType_1 ()
	 * @uses AnimatorWrapperMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::MemberwiseClone_1 ()
	 * @uses AnimatorWrapperMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Finalize_1 ()
	 * @uses AnimatorWrapperMethodsOverride::Finalize_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Finalize(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::ToString_1 ()
	 * @uses AnimatorWrapperMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::Equals_1 ($obj)
	 * @uses AnimatorWrapperMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses AnimatorWrapperMethodsOverride::GetHashCode_1 ()
	 * @uses AnimatorWrapperMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
}
