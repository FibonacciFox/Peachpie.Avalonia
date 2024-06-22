<?php
namespace Avalonia\Rendering\Composition;
class CompositionVisual extends \Avalonia\Rendering\Composition\CompositionObject implements
	\Avalonia\Rendering\Composition\ICompositorSerializable
{

	/**
	 * @field
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 */
	protected $PendingAnimations;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $OpacityMask;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Visible;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ClipToBounds;
	/**
	 * @property
	 * @var \Avalonia\Vector3D
	 */
	public $Offset;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $Size;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $AnchorPoint;
	/**
	 * @property
	 * @var \Avalonia\Vector3D
	 */
	public $CenterPoint;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $RotationAngle;
	/**
	 * @property
	 * @var \System\Numerics\Quaternion
	 */
	public $Orientation;
	/**
	 * @property
	 * @var \Avalonia\Vector3D
	 */
	public $Scale;
	/**
	 * @property
	 * @var \Avalonia\Media\RenderOptions
	 */
	public $RenderOptions;
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
	 * @return \System\Void|void
	 */
	protected function OnRootChangedCore(){}
	/**
	 * @return \System\Nullable_1[Avalonia\Matrix]
	 */
	protected function TryGetServerGlobalTransform(){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean|bool
	 */
	protected function HitTest($point){}
	private function OnRootChanged(){}
	private function OnParentChanged(){}
	private function InitializeDefaults(){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}