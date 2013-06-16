<?php

namespace Sly\NotificationPusher\Exception;

use Sly\NotificationPusher\Exception\Exception;

/**
 * RuntimeException.
 *
 * @uses   \RuntimeException
 * @uses   \Sly\NotificationPusher\Exception\Exception
 * 
 * @author Cédric Dugat <cedric@dugat.me>
 */
class RuntimeException extends \RuntimeException implements Exception
{
}
