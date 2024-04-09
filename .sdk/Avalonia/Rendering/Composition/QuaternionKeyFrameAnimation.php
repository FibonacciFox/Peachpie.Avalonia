<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait QuaternionKeyFrameAnimationOverride {
	/**
	 * @deprecated
	 * @param \System\Single $normalizedProgressKey
	 * @param \System\Numerics\Quaternion $value
	 * @param \Avalonia\Animation\Easings\IEasing $easingFunction
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function InsertKeyFrame_1 ($normalizedProgressKey, $value, $easingFunction){}
	/**
	 * @deprecated
	 * @param \System\Single $normalizedProgressKey
	 * @param \System\Numerics\Quaternion $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function InsertKeyFrame_2 ($normalizedProgressKey, $value){}
}
class QuaternionKeyFrameAnimation extends \Avalonia\Rendering\Composition\Animations\KeyFrameAnimation implements
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
{
	use QuaternionKeyFrameAnimationOverride;
	/**
	 * @field
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 */
	protected $PendingAnimations;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\AnimationDelayBehavior
	 */
	public $DelayBehavior;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $DelayTime;
	/**
	 * @property
	 * @var \Avalonia\Animation\PlaybackDirection
	 */
	public $Direction;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Duration;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\AnimationIterationBehavior
	 */
	public $IterationBehavior;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $IterationCount;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\AnimationStopBehavior
	 */
	public $StopBehavior;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Target;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection
	 */
	public $ImplicitAnimations;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @since readonly
	 */
	public $Compositor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @uses QuaternionKeyFrameAnimationOverride::InsertKeyFrame_1 <br>public , args: ($normalizedProgressKey, $value, $easingFunction)<br>
	 * @uses QuaternionKeyFrameAnimationOverride::InsertKeyFrame_2 <br>public , args: ($normalizedProgressKey, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function InsertKeyFrame (\override ...$args){}
	private function InternalOnly(){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 */
	public function __construct($compositor){}
}