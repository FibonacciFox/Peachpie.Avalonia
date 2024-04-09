<?php
namespace System\Runtime\CompilerServices;
final class CompilerFeatureRequiredAttribute extends \System\Attribute
{
	/**
	 * @field
	 * @var \System\String|string
	 */
	const RefStructs = 'RefStructs';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const RequiredMembers = 'RequiredMembers';
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FeatureName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsOptional;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $featureName
	 */
	public function __construct($featureName){}
}