<?php
namespace Avalonia\Metadata;
final class XmlnsPrefixAttribute extends \System\Attribute
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
	public $Prefix;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $xmlNamespace
	 * @param \System\String|string $prefix
	 */
	public function __construct($xmlNamespace, $prefix){}
}