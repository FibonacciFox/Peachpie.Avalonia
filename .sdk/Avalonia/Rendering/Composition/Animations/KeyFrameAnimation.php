<?php
namespace Avalonia\Rendering\Composition\Animations;
class KeyFrameAnimation extends \Avalonia\Rendering\Composition\Animations\CompositionAnimation implements
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
{

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
	 * @param \System\Single $normalizedProgressKey
	 * @param \System\String|string $value
	 * @param \Avalonia\Animation\Easings\Easing $easingFunction
	 * @return \System\Void|void
	 */
	public function InsertExpressionKeyFrame($normalizedProgressKey, $value, $easingFunction){}
	private function InternalOnly(){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}