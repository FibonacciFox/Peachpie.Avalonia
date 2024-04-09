<?php
namespace Avalonia\Rendering\Composition\Server;
class SimpleServerObject extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @since readonly
	 */
	public $Compositor;
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamReader $reader
	 * @param \System\TimeSpan $committedAt
	 * @return \System\Void|void
	 */
	protected function DeserializeChangesCore($reader, $committedAt){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamReader $reader
	 * @param \Avalonia\Rendering\Composition\Transport\CompositionBatch $batch
	 * @return \System\Void|void
	 */
	public function DeserializeChanges($reader, $batch){}
	/**
	 * @return \System\Void|void
	 */
	protected function ValuesInvalidated(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $prop
	 * @param \T& $field
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	protected function SetValue($prop, $field, $value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $prop
	 * @param \T& $field
	 * @return \T|object
	 */
	protected function GetValue($prop, $field){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositor $compositor
	 */
	public function __construct($compositor){}
}