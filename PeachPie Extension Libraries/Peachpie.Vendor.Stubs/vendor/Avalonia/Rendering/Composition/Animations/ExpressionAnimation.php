<?php
namespace Avalonia\Rendering\Composition\Animations;
class ExpressionAnimation extends \Avalonia\Rendering\Composition\Animations\CompositionAnimation implements
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
	 * @var \System\String|string
	 */
	public $Expression;
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
	private function InternalOnly(){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}