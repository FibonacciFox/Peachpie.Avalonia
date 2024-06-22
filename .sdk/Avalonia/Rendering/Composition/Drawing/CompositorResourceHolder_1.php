<?php
namespace Avalonia\Rendering\Composition\Drawing;
final class CompositorResourceHolder_1 extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAttached;
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @param \Avalonia\Rendering\Composition\ICompositorSerializable $owner
	 * @param \T& &$resource
	 * @param \System\Func_2 $factory [generic: Avalonia\Rendering\Composition\Compositor,T]
	 * @return \System\Boolean|bool
	 */
	public function CreateOrAddRef($compositor, $owner, &$resource, $factory){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \T|object
	 */
	public function TryGetForCompositor($compositor){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \T|object
	 */
	public function GetForCompositor($compositor){}
	private static function ThrowDoesNotExist(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \System\Boolean|bool
	 */
	public function Release($compositor){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $change
	 * @return \System\Void|void
	 */
	public function ProcessPropertyChangeNotification($change){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource $oldResource
	 * @return \System\Void|void
	 */
	public function TransitiveReleaseAll($oldResource){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource $newResource
	 * @return \System\Void|void
	 */
	public function TransitiveAddRefAll($newResource){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositorSerializable $serializable
	 * @return \System\Void|void
	 */
	public function RegisterForInvalidationOnAllCompositors($serializable){}
}