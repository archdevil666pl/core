<?php
/**
 * This file is part of Vegas package
 *
 * @author Slawomir Zytko <slawek@amsterdam-standard.pl>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage http://vegas-cmf.github.io
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */ 

namespace Vegas\Mvc\Module\Exception;

use Vegas\Mvc\Exception as MvcException;

/**
 * Class InvalidModulesListException
 * @package Vegas\Mvc\Module\Exception
 */
class InvalidModulesListException extends MvcException
{
    protected $message = 'Invalid modules list';
}
 