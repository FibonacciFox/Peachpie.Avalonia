<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionVisualCollectionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RegisterForSerialization_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RegisterForSerialization_2(){}
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
	#[MethodOverride] public  function StartAnimation_1($propertyName, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function StartAnimation_2($propertyName, $animation, $finalValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimationGroup_1($grp){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function StartAnimationGroup_2($grp, $target, $finalValue){}
}
/**
 */
class CompositionVisualCollection extends \Avalonia\Rendering\Composition\CompositionObject implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Rendering\Composition\Transport\IRegisterForSerialization,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 * @field
	 */
	protected $PendingAnimations;
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
	 * @var \Avalonia\Rendering\Composition\CompositionVisual
	 * @property
	 */
	public $Item;
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection
	 * @property
	 */
	public $ImplicitAnimations;
	/**
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newChild
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $sibling
	 * @return \System\Void|void
	 */
	public  function InsertAbove($newChild, $sibling){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newChild
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $sibling
	 * @return \System\Void|void
	 */
	public  function InsertBelow($newChild, $sibling){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newChild
	 * @return \System\Void|void
	 */
	public  function InsertAtTop($newChild){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newChild
	 * @return \System\Void|void
	 */
	public  function InsertAtBottom($newChild){}
	/**
	 * @return \System\Void|void
	 */
	public  function RemoveAll(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeDefaults(){}
	/**
	 * @uses CompositionVisualCollectionMethodsOverride::RegisterForSerialization_1 ()
	 * @uses CompositionVisualCollectionMethodsOverride::RegisterForSerialization_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RegisterForSerialization(mixed ...$args){}
	/**
	 * @uses CompositionVisualCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses CompositionVisualCollectionMethodsOverride::GetEnumerator_2 ()
	 * @uses CompositionVisualCollectionMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $arrayIndex){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Boolean
	 */
	public  function Remove($item){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Int32|int
	 */
	public  function IndexOf($item){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Void|void
	 */
	public  function Insert($index, $item){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Rendering\Composition\CompositionVisual
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnBeforeAdded($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnAdded($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRemoved($item){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnBeforeClear(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $oldItem
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newItem
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnBeforeReplace($oldItem, $newItem){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $oldItem
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newItem
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnReplace($oldItem, $newItem){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses CompositionVisualCollectionMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses CompositionVisualCollectionMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses CompositionVisualCollectionMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionVisualCollectionMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimationGroup(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SerializeChanges($c, $writer){}
}
