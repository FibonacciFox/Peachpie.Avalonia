<?php
namespace Avalonia\Media\Imaging;
interface IBitmap
{


	/**
	 * @param \System\String|string $fileName
	 * @param \System\Nullable_1 $quality [generic: System\Int32]
	 * @return \System\Void|void
	 */
	public function Save($fileName, $quality);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Nullable_1 $quality [generic: System\Int32]
	 * @return \System\Void|void
	 */
	public function Save($stream, $quality);
}