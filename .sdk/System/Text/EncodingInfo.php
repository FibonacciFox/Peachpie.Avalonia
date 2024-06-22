<?php
namespace System\Text;
final class EncodingInfo extends \System\Object
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CodePage;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DisplayName;
	/**
	 * @return \System\Text\Encoding
	 */
	public function GetEncoding(){}
	/**
	 * @param \System\Text\EncodingProvider $provider
	 * @param \System\Int32|int $codePage
	 * @param \System\String|string $name
	 * @param \System\String|string $displayName
	 */
	public function __construct($provider, $codePage, $name, $displayName){}
}