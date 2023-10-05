<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionTargetMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionTarget
	 */
	#[MethodOverride] protected  function get_Server_1(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\SimpleServerObject
	 */
	#[MethodOverride] protected  function get_Server_2(){}
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
class CompositionTarget extends \Avalonia\Rendering\Composition\CompositionObject implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 * @field
	 */
	protected $PendingAnimations;
	/**
	 * @var \Avalonia\Rendering\Composition\CompositionVisual
	 * @property
	 */
	public $Root;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsEnabled;
	/**
	 * @var \Avalonia\Rendering\RendererDebugOverlays
	 * @property
	 */
	public $DebugOverlays;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Scaling;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $Size;
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
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $root
	 * @param \System\Func_2 $filter
	 * @return \Avalonia\Collections\Pooled\PooledList_1
	 */
	public  function TryHitTest($point, $root, $filter){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $visual
	 * @param \Avalonia\Point $point
	 * @return \System\Nullable_1
	 */
	public  function TryTransformToVisual($visual, $point){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $visual
	 * @param \Avalonia\Matrix& $matrix
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetInvertedTransform($visual, $matrix){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $visual
	 * @param \Avalonia\Point $globalPoint
	 * @param \Avalonia\Point& $v
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryTransformTo($visual, $globalPoint, $v){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $visual
	 * @param \Avalonia\Point $globalPoint
	 * @param \Avalonia\Collections\Pooled\PooledList_1 $result
	 * @param \System\Func_2 $filter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HitTestCore($visual, $globalPoint, $result, $filter){}
	/**
	 * @return \System\Void|void
	 */
	public  function RequestRedraw(){}
	/**
	 * @uses CompositionTargetMethodsOverride::get_Server_1 ()
	 * @uses CompositionTargetMethodsOverride::get_Server_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Server(mixed ...$args){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionVisual
	 */
	public  function get_Root(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $value
	 * @return \System\Void|void
	 */
	public  function set_Root($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRootChanged(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRootChanging(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsEnabled($value){}
	/**
	 * @return \Avalonia\Rendering\RendererDebugOverlays
	 */
	public  function get_DebugOverlays(){}
	/**
	 * @param \Avalonia\Rendering\RendererDebugOverlays $value
	 * @return \System\Void|void
	 */
	public  function set_DebugOverlays($value){}
	/**
	 * @return \Avalonia\Rendering\LayoutPassTiming
	 */
	protected  function get_LastLayoutPassTiming(){}
	/**
	 * @param \Avalonia\Rendering\LayoutPassTiming $value
	 * @return \System\Void|void
	 */
	protected  function set_LastLayoutPassTiming($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Scaling($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Size(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	public  function set_Size($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeDefaults(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses CompositionTargetMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses CompositionTargetMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses CompositionTargetMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionTargetMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
