<?php
namespace System\Reflection;
class ManifestResourceInfo extends \System\Object
{
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $ReferencedAssembly;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FileName;
	/**
	 * @property
	 * @var \System\Reflection\ResourceLocation
	 * @since readonly
	 */
	public $ResourceLocation;
	/**
	 * @param \System\Reflection\Assembly $containingAssembly
	 * @param \System\String|string $containingFileName
	 * @param \System\Reflection\ResourceLocation $resourceLocation
	 */
	public function __construct($containingAssembly, $containingFileName, $resourceLocation){}
}