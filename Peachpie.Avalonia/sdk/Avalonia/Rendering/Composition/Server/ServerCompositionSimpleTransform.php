<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSimpleTransformMethodsOverride
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
class ServerCompositionSimpleTransform extends \Avalonia\Rendering\Composition\Server\SimpleServerRenderResource implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\ITransform
{
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_Value(){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \System\Void|void
	 */
	public  function set_Value($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @param \Avalonia\Matrix $value
	 * @return \System\Void|void
	 */
	protected static function SerializeAllChanges($writer, $value){}
	/**
	 * @uses ServerCompositionSimpleTransformMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSimpleTransformMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionSimpleTransformMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
