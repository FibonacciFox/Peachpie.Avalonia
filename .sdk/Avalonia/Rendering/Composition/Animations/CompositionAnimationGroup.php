<?php
namespace Avalonia\Rendering\Composition\Animations;
class CompositionAnimationGroup extends \Avalonia\Rendering\Composition\CompositionObject implements
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
	/**
	 * @param \Avalonia\Rendering\Composition\Animations\CompositionAnimation $value
	 * @return \System\Void|void
	 */
	public function Add($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Animations\CompositionAnimation $value
	 * @return \System\Void|void
	 */
	public function Remove($value){}
	/**
	 * @return \System\Void|void
	 */
	public function RemoveAll(){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 */
	public function __construct($compositor){}
}