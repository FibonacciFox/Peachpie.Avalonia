<?php
namespace Avalonia\OpenGL;
/**
 */
enum GlProfileType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case OpenGL = 0;
	case OpenGLES = 1;
}
