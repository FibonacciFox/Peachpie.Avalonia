<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KeyFrameAnimationMethodsOverride
{
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
class KeyFrameAnimation extends \Avalonia\Rendering\Composition\Animations\CompositionAnimation implements 
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
	 * @return \Avalonia\Rendering\Composition\Animations\AnimationDelayBehavior
	 */
	public  function get_DelayBehavior(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Animations\AnimationDelayBehavior $value
	 * @return \System\Void|void
	 */
	public  function set_DelayBehavior($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_DelayTime(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_DelayTime($value){}
	/**
	 * @return \Avalonia\Animation\PlaybackDirection
	 */
	public  function get_Direction(){}
	/**
	 * @param \Avalonia\Animation\PlaybackDirection $value
	 * @return \System\Void|void
	 */
	public  function set_Direction($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Duration(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_Duration($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\AnimationIterationBehavior
	 */
	public  function get_IterationBehavior(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Animations\AnimationIterationBehavior $value
	 * @return \System\Void|void
	 */
	public  function set_IterationBehavior($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_IterationCount(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_IterationCount($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\AnimationStopBehavior
	 */
	public  function get_StopBehavior(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Animations\AnimationStopBehavior $value
	 * @return \System\Void|void
	 */
	public  function set_StopBehavior($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\IKeyFrames
	 */
	protected  function get_KeyFrames(){}
	/**
	 * @param \System\Single $normalizedProgressKey
	 * @param \System\String|string $value
	 * @param \Avalonia\Animation\Easings\Easing $easingFunction
	 * @return \System\Void|void
	 */
	public  function InsertExpressionKeyFrame($normalizedProgressKey, $value, $easingFunction){}
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
	 * @uses KeyFrameAnimationMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses KeyFrameAnimationMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses KeyFrameAnimationMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses KeyFrameAnimationMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
