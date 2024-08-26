<?php
namespace Avalonia\Rendering\Composition;
class CompositionSurface extends \Avalonia\Rendering\Composition\CompositionObject implements
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @field
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 */
	protected $PendingAnimations;
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
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}