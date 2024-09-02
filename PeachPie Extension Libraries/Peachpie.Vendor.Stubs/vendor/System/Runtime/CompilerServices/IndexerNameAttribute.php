<?php
namespace System\Runtime\CompilerServices;
final class IndexerNameAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $indexerName
	 */
	public function __construct($indexerName){}
}