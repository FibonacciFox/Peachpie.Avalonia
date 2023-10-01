<?php
namespace Avalonia\OpenGL;
/**
 */
enum GlErrors implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case GL_NO_ERROR = 0;
	case GL_INVALID_ENUM = 1280;
	case GL_INVALID_VALUE = 1281;
	case GL_INVALID_OPERATION = 1282;
	case GL_INVALID_FRAMEBUFFER_OPERATION = 1283;
	case GL_STACK_OVERFLOW = 1284;
	case GL_STACK_UNDERFLOW = 1285;
	case GL_OUT_OF_MEMORY = 1286;
	case GL_CONTEXT_LOST = 1287;
}
