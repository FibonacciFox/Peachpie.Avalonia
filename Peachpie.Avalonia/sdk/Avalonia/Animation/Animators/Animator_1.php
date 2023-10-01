<?php
namespace Avalonia\Animation\Animators;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Animator_1MethodsOverride
{
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
class Animator_1 extends \Avalonia\Collections\AvaloniaList_1 implements 
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
	 * @return \Avalonia\AvaloniaProperty
	 */
	public  function get_Property(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $value
	 * @return \System\Void|void
	 */
	public  function set_Property($value){}
	/**
	 * @param \Avalonia\Animation\Animation $animation
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\IObservable_1 $match
	 * @param \System\Action $onComplete
	 * @return \System\IDisposable
	 */
	public  function Apply($animation, $control, $clock, $match, $onComplete){}
	/**
	 * @param \System\Double|double $animationTime
	 * @param \Avalonia\Animation\Animators\T $neutralValue
	 * @return \Avalonia\Animation\Animators\T
	 */
	protected  function InterpolationHandler($animationTime, $neutralValue){}
	/**
	 * @param \System\Double|double $time
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindClosestBeforeKeyFrame($time){}
	/**
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \System\IObservable_1 $instance
	 * @return \System\IDisposable
	 */
	public  function BindAnimation($control, $instance){}
	/**
	 * @param \Avalonia\Animation\Animation $animation
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Action $onComplete
	 * @return \System\IDisposable
	 */
	protected  function Run($animation, $control, $clock, $onComplete){}
	/**
	 * @param \System\Double|double $progress
	 * @param \Avalonia\Animation\Animators\T $oldValue
	 * @param \Avalonia\Animation\Animators\T $newValue
	 * @return \Avalonia\Animation\Animators\T
	 */
	public  function Interpolate($progress, $oldValue, $newValue){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VerifyConvertKeyFrames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddNeutralKeyFramesIfNeeded(){}
	/**
	 * @param \System\Boolean $hasStartKey
	 * @param \System\Boolean $hasEndKey
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddNeutralKeyFrames($hasStartKey, $hasEndKey){}
	/**
	 * @uses Animator_1MethodsOverride::get_Count_1 ()
	 * @uses Animator_1MethodsOverride::get_Count_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Count(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @uses Animator_1MethodsOverride::get_IsReadOnly_1 ()
	 * @uses Animator_1MethodsOverride::get_IsReadOnly_2 ()
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
	 * @uses Animator_1MethodsOverride::get_Item_1 ($index)
	 * @uses Animator_1MethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::set_Item_1 ($index, $value)
	 * @uses Animator_1MethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::Add_1 ($item)
	 * @uses Animator_1MethodsOverride::Add_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::Clear_1 ()
	 * @uses Animator_1MethodsOverride::Clear_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::Contains_1 ($item)
	 * @uses Animator_1MethodsOverride::Contains_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses Animator_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::GetEnumerator_1 ()
	 * @uses Animator_1MethodsOverride::GetEnumerator_2 ()
	 * @uses Animator_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::IndexOf_1 ($item)
	 * @uses Animator_1MethodsOverride::IndexOf_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::Insert_1 ($index, $item)
	 * @uses Animator_1MethodsOverride::Insert_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::Remove_1 ($item)
	 * @uses Animator_1MethodsOverride::Remove_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses Animator_1MethodsOverride::RemoveAt_1 ($index)
	 * @uses Animator_1MethodsOverride::RemoveAt_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAt(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCollectionChangedSubscribers(){}
}
