<?php
namespace Avalonia\Metadata;
final class XmlnsDefinitionAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $XmlNamespace;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ClrNamespace;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $xmlNamespace
	 * @param \System\String|string $clrNamespace
	 */
	public function __construct($xmlNamespace, $clrNamespace){}
}