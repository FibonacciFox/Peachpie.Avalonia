<?php
namespace System\Reflection;
final class Table extends \System\Object
{

	/**
	 * @field
	 * @var \K[]
	 */
	protected $m_keys;
	/**
	 * @field
	 * @var \V[]
	 */
	protected $m_values;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_count;
	/**
	 * @param \K $key
	 * @param \V $value
	 * @return \System\Void|void
	 */
	protected function Insert($key, $value){}
}