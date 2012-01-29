<?php
/**
 * DocBlox
 *
 * PHP Version 5
 *
 * @category  DocBlox
 * @package   Parallel
 * @author    Mike van Riel <mike.vanriel@naenius.com>
 * @copyright 2010-2011 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://docblox-project.org
 */

/** Include the manager as we do not autoload */
require_once 'Manager.php';

/** Include the worker as we do not autoload */
require_once 'Worker.php';

$mgr = new DocBlox_Parallel_Manager();

$mgr
  ->addWorker(new DocBlox_Parallel_Worker(function() { var_dump('a'); sleep(1); }))
  ->addWorker(new DocBlox_Parallel_Worker(function() { var_dump('b'); sleep(1); }))
  ->addWorker(new DocBlox_Parallel_Worker(function() { var_dump('c'); sleep(1); }))
  ->addWorker(new DocBlox_Parallel_Worker(function() { var_dump('d'); sleep(1); }))
  ->addWorker(new DocBlox_Parallel_Worker(function() { var_dump('e'); sleep(1); }))
  ->execute();