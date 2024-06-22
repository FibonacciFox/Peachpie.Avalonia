<?php
namespace System\Runtime;
final class AssemblyTargetedPatchBandAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $TargetedPatchBand;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $targetedPatchBand
	 */
	public function __construct($targetedPatchBand){}
}