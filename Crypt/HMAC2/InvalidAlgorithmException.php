<?php

/**
 * Exception thrown when an invalid or unavailable algorithm is selected
 *
 * PHP version 5
 *
 * LICENSE:
 *
 * Copyright (c) 2005-2009, Pádraic Brady <padraic.brady@yahoo.com>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *    * Redistributions of source code must retain the above copyright
 *      notice, this list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright
 *      notice, this list of conditions and the following disclaimer in the
 *      documentation and/or other materials provided with the distribution.
 *    * The name of the author may not be used to endorse or promote products
 *      derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS
 * IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR
 * CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 * PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY
 * OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 * NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category Encryption
 * @package  Crypt_HMAC2
 * @author   Pádraic Brady <padraic.brady@yahoo.com>
 * @license  http://opensource.org/licenses/bsd-license.php New BSD License
 * @version  $Id: $
 * @link     http://pear.php.net/package/Crypt_HMAC2/
 */

/**
 * Base exception class.
 */
require_once 'Crypt/HMAC2/Exception.php';

/**
 * Exception thrown when an invalid or unavailable algorithm is selected
 *
 * @category  Encryption
 * @package   Crypt_HMAC2
 * @author    Pádraic Brady <padraic.brady@yahoo.com>
 * @copyright 2005-2009 Pádraic Brady
 * @license   http://opensource.org/licenses/bsd-license.php New BSD License
 * @link      http://pear.php.net/package/Crypt_HMAC2/
 * @version   @package_version@
 */
class Crypt_HMAC2_InvalidAlgorithmException extends Crypt_HMAC2_Exception
{
    /**
     * The invalid hash algorithm
     *
     * @var string
     * @see Crypt_HMAC2_InvalidAlgorithmException::getHashAlgorithm()
     */
    protected $algorithm = '';

    /**
     * Creates a new invalid algorithm exception
     *
     * @param string  $message   the exception message.
     * @param integer $code      optional. The exception code.
     * @param string  $algorithm optional. The hash algorithm that is invalid
     *                           or unavailable.
     */
    public function __construct($message, $code = 0, $algorithm = '')
    {
        parent::__construct($message, $code);
        $this->algorithm = $algorithm;
    }

    /**
     * Gets the invalid hash algorithm name
     *
     * @return string the invalid hash algorithm
     */
    public function getHashAlgorithm()
    {
        return $this->algorithm;
    }
}

?>
