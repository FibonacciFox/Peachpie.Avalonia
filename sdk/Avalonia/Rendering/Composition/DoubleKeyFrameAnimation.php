<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DoubleKeyFrameAnimationMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function InsertKeyFrame_1($normalizedProgressKey, $value, $easingFunction){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function InsertKeyFrame_2($normalizedProgressKey, $value){}
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
class DoubleKeyFrameAnimation extends \Avalonia\Rendering\Composition\Animations\KeyFrameAnimation implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
{
	/**
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 * @field
	 */
	protected $PendingAnimations;
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\AnimationDelayBehavior
	 * @property
	 */
	public $DelayBehavior;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $DelayTime;
	/**
	 * @var \Avalonia\Animation\PlaybackDirection
	 * @property
	 */
	public $Direction;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $Duration;
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\AnimationIterationBehavior
	 * @property
	 */
	public $IterationBehavior;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $IterationCount;
	/**
	 * @var \Avalonia\Rendering\Composition\Animations\AnimationStopBehavior
	 * @property
	 */
	public $StopBehavior;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Target;
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
	 * @uses DoubleKeyFrameAnimationMethodsOverride::InsertKeyFrame_1 ($normalizedProgressKey, $value, $easingFunction)
	 * @uses DoubleKeyFrameAnimationMethodsOverride::InsertKeyFrame_2 ($normalizedProgressKey, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InsertKeyFrame(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalOnly(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses DoubleKeyFrameAnimationMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses DoubleKeyFrameAnimationMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses DoubleKeyFrameAnimationMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses DoubleKeyFrameAnimationMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
