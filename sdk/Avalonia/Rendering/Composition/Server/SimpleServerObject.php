<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 */
class SimpleServerObject extends \System\Object
{
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositor
	 */
	public  function get_Compositor(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamReader $reader
	 * @param \System\TimeSpan $committedAt
	 * @return \System\Void|void
	 */
	protected  function DeserializeChangesCore($reader, $committedAt){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamReader $reader
	 * @param \Avalonia\Rendering\Composition\Transport\Batch $batch
	 * @return \System\Void|void
	 */
	public  function DeserializeChanges($reader, $batch){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ValuesInvalidated(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $prop
	 * @param \Avalonia\Rendering\Composition\Server\T& $field
	 * @param \Avalonia\Rendering\Composition\Server\T $value
	 * @return \System\Void|void
	 */
	protected  function SetValue($prop, $field, $value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $prop
	 * @param \Avalonia\Rendering\Composition\Server\T& $field
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	protected  function GetValue($prop, $field){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
