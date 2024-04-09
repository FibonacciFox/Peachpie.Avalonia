<?php
namespace System\Runtime\CompilerServices;
final class CastCacheEntry extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_version;
	/**
	 * @field
	 * @var \System\UIntPtr
	 */
	protected $_source;
	/**
	 * @field
	 * @var \System\UIntPtr
	 */
	protected $_targetAndResult;

}