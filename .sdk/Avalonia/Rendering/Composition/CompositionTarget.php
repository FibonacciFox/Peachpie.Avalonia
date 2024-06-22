<?php
namespace Avalonia\Rendering\Composition;
class CompositionTarget extends \Avalonia\Rendering\Composition\CompositionObject implements
	\Avalonia\Rendering\Composition\ICompositorSerializable
{

	/**
	 * @field
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 */
	protected $PendingAnimations;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\CompositionVisual
	 */
	public $Root;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsEnabled;
	/**
	 * @property
	 * @var \Avalonia\Rendering\RendererDebugOverlays
	 */
	public $DebugOverlays;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Scaling;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $Size;
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
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $root
	 * @param \System\Func_2 $filter [generic: Avalonia\Rendering\Composition\CompositionVisual,System\Boolean]
	 * @return \Avalonia\Collections\Pooled\PooledList_1[Avalonia\Rendering\Composition\CompositionVisual]
	 */
	public function TryHitTest($point, $root, $filter){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $visual
	 * @param \Avalonia\Point $point
	 * @return \System\Nullable_1[Avalonia\Point]
	 */
	public function TryTransformToVisual($visual, $point){}
	private static function TryGetInvertedTransform($visual, &$matrix){}
	private static function TryTransformTo($visual, $globalPoint, &$v){}
	private function HitTestCore($visual, $globalPoint, $result, $filter){}
	/**
	 * @return \System\Void|void
	 */
	public function RequestRedraw(){}
	private function OnRootChanged(){}
	private function OnRootChanging(){}
	private function InitializeDefaults(){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}