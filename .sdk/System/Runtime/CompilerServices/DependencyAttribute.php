<?php
namespace System\Runtime\CompilerServices;
final class DependencyAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DependentAssembly;
	/**
	 * @property
	 * @var \System\Runtime\CompilerServices\LoadHint
	 * @since readonly
	 */
	public $LoadHint;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $dependentAssemblyArgument
	 * @param \System\Runtime\CompilerServices\LoadHint $loadHintArgument
	 */
	public function __construct($dependentAssemblyArgument, $loadHintArgument){}
}