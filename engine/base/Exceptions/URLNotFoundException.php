<?php

namespace engine\base\Exceptions;
/**
 * Запрашиваемый URL не найден
 */
class URLNotFoundException extends \engine\base\Exceptions\BaseException
{

	public function __construct($element)
	{
		parent::__construct('Страница не найдена "'.strtolower($element).'"');
		$this->element = $element;
		$this->code = 404;
		$this->title = $this->message;
	}
	
}