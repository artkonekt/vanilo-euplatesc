<?php
/**
 * Contains the NoGatewayRegistrationTest class.
 *
 * @copyright   Copyright (c) 2019 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2019-12-26
 *
 */

namespace Konekt\Euplatesc\Tests\Gateway;

use Konekt\Euplatesc\Tests\TestCase;
use Vanilo\Payment\PaymentGateways;

class OmitRegistrationTest extends TestCase
{
    protected function setUp(): void
    {
        PaymentGateways::reset();
        parent::setUp();
    }

    /** @test */
    public function the_gateway_registration_can_be_disabled()
    {
        $this->assertCount(1, PaymentGateways::ids());
    }

    protected function resolveApplicationConfiguration($app)
    {
        parent::resolveApplicationConfiguration($app);

        config(['konekt.euplatesc.gateway.register' => false]);
    }
}