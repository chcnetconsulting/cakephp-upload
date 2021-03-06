<?php
declare(strict_types=1);

namespace Josegonzalez\Upload\Test\Stub;

use Josegonzalez\Upload\Model\Behavior\UploadBehavior;

class ChildBehavior extends UploadBehavior
{
    protected $_defaultConfig = ['key' => 'value'];
}
