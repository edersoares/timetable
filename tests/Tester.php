<?php

declare(strict_types=1);

namespace Portabilis\Timetable\Tests;

use Illuminate\Foundation\Testing\TestCase;

/**
 * @mixin TestCase
 */
trait Tester
{
    use Action;
    use Eloquent;
    use Endpoint;
    use Relation;
    use Validator;
}
