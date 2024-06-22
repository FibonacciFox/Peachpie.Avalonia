<?php
namespace Avalonia\Media;
final class TransformContainer extends \System\ValueType
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Matrix
	 */
	public $LocalTransform;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Matrix
	 */
	public $ContainerTransform;
	/**
	 * @param \Avalonia\Matrix $localTransform
	 * @param \Avalonia\Matrix $containerTransform
	 */
	public function __construct($localTransform, $containerTransform){}
}