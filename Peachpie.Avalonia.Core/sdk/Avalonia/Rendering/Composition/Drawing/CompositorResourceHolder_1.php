<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class CompositorResourceHolder_1 extends \System\ValueType
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAttached(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @param \Avalonia\Rendering\Composition\ICompositorSerializable $owner
	 * @param \Avalonia\Rendering\Composition\Drawing\T& $resource
	 * @param \System\Func_2 $factory
	 * @return \System\Boolean
	 */
	public  function CreateOrAddRef($compositor, $owner, $resource, $factory){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \Avalonia\Rendering\Composition\Drawing\T
	 */
	public  function TryGetForCompositor($compositor){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \Avalonia\Rendering\Composition\Drawing\T
	 */
	public  function GetForCompositor($compositor){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowDoesNotExist(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \System\Boolean
	 */
	public  function Release($compositor){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $change
	 * @return \System\Void|void
	 */
	public  function ProcessPropertyChangeNotification($change){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource $oldResource
	 * @return \System\Void|void
	 */
	public  function TransitiveReleaseAll($oldResource){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource $newResource
	 * @return \System\Void|void
	 */
	public  function TransitiveAddRefAll($newResource){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositorSerializable $serializable
	 * @return \System\Void|void
	 */
	public  function RegisterForInvalidationOnAllCompositors($serializable){}
}
