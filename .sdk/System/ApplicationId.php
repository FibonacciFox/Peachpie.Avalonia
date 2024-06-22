<?php
namespace System;
final class ApplicationId extends \System\Object
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Culture;
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
	public $ProcessorArchitecture;
	/**
	 * @property
	 * @var \System\Version
	 * @since readonly
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\Byte[]
	 * @since readonly
	 */
	public $PublicKeyToken;
	/**
	 * @return \System\ApplicationId
	 */
	public function Copy(){}
	/**
	 * @param \System\Byte $publicKeyToken
	 * @param \System\String|string $name
	 * @param \System\Version $version
	 * @param \System\String|string $processorArchitecture
	 * @param \System\String|string $culture
	 */
	public function __construct($publicKeyToken, $name, $version, $processorArchitecture, $culture){}
}