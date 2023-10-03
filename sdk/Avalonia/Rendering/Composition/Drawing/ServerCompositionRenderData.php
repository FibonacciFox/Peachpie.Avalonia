<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionRenderDataMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_1($prop, $field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_2($field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_3($prop, $field, $value){}
}
/**
 */
class ServerCompositionRenderData extends \Avalonia\Rendering\Composition\Server\SimpleServerRenderResource implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable
{
	/**
	 * @param \Avalonia\Utilities\PooledInlineList_1 $items
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector $collector
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CollectResources($items, $collector){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Bounds(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CalculateRenderBounds(){}
	/**
	 * @param \System\Nullable_1 $rect
	 * @return \System\Nullable_1
	 */
	public static function ApplyRenderBoundsRounding($rect){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @return \System\Void|void
	 */
	public  function Render($context){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reset(){}
	/**
	 * @uses ServerCompositionRenderDataMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionRenderDataMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionRenderDataMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
