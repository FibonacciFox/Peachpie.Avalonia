<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImplicitAnimationCollectionMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_2($key, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_2($key){}
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
class ImplicitAnimationCollection extends \Avalonia\Rendering\Composition\CompositionObject implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\System\Collections\Generic\IDictionary_2,
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
	 * @var \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $Size;
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
	 * @uses ImplicitAnimationCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses ImplicitAnimationCollectionMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses ImplicitAnimationCollectionMethodsOverride::Add_1 ($item)
	 * @uses ImplicitAnimationCollectionMethodsOverride::Add_2 ($key, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2 $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Contains($item){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyTo($array, $arrayIndex){}
	/**
	 * @uses ImplicitAnimationCollectionMethodsOverride::Remove_1 ($item)
	 * @uses ImplicitAnimationCollectionMethodsOverride::Remove_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Boolean
	 */
	public  function ContainsKey($key){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @param \System\String|string $key
	 * @return \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
	 */
	public  function get_Item($key){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase $value
	 * @return \System\Void|void
	 */
	public  function set_Item($key, $value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Keys(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Values(){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyDictionary_2
	 */
	public  function GetView(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Boolean
	 */
	public  function HasKey($key){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase $animation
	 * @return \System\Void|void
	 */
	public  function Insert($key, $animation){}
	/**
	 * @param \System\String|string $key
	 * @return \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
	 */
	public  function Lookup($key){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses ImplicitAnimationCollectionMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses ImplicitAnimationCollectionMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses ImplicitAnimationCollectionMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses ImplicitAnimationCollectionMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
