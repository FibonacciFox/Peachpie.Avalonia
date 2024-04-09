<?php
namespace Avalonia\Media;
class ImmutableGlyphRunReference extends \System\Object implements
	\Avalonia\Media\IImmutableGlyphRunReference,
	\System\IDisposable
{
	/**
	 * @property
	 * @var \Avalonia\Utilities\IRef_1[Avalonia\Platform\IGlyphRunImpl]
	 */
	public $GlyphRun;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Utilities\IRef_1 $glyphRun [generic: Avalonia\Platform\IGlyphRunImpl]
	 */
	public function __construct($glyphRun){}
}