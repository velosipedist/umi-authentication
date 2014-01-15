<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */

namespace umi\authentication\exception;

/**
 * Исключения, связанные тем, что значение не придерживается определенных правил текущего контекста.
 * Например, если не существует класс, который передан в опциях, либо класс не следует
 * необходимому контракту.
 */
class DomainException extends \DomainException implements IException
{
}
