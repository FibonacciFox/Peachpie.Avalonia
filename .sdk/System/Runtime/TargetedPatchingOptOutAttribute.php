<?php
namespace System\Runtime;
final class TargetedPatchingOptOutAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Reason;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $reason
	 */
	public function __construct($reason){}
}