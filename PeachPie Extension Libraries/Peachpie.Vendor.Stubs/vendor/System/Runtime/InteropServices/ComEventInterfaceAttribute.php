<?php
namespace System\Runtime\InteropServices;
final class ComEventInterfaceAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $SourceInterface;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $EventProvider;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $SourceInterface
	 * @param \System\Type $EventProvider
	 */
	public function __construct($SourceInterface, $EventProvider){}
}