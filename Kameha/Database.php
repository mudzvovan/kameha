<?php

declare(strict_types=1);

/**
 * Kameha Database Framework.
 *
 * The Lightweight PHP Database Class from Kameha.
 *
 * @version 1.0
 * @author Kameha Inv
 * @package Kameha
 * @copyright Copyright 2024 Kameha Inv
 * @license https://opensource.org/licenses/MIT
 * @link https://kamehainv.com
 */


namespace Kameha;

use PDO;
use Exception;
use PDOException;
use PDOStatement;
use InvalidArgumentException;

class Database
{
    private static $_instance = null;

    /**
     * The PDO object to be used
     *
     * @var \PDO
     */
	private $_pdo;

    /**
     * The database connection string.
     *
     * @var string
     */
    private $dsn;

    /**
     * The PDO statement object.
     *
     * @var \PDOStatement
     */
    private $_query;

	/**
     * The errors from an executed statement
     *
     * @var bool
     */
    private $_error = false;

    /**
     * The results from an executed statement
     *
     * @var array
     */
    private $_results;

    /**
     * The number of results from an executed statement
     *
     * @var int
     */
    private $_count = 0;

}