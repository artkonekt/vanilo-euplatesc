<?php
/**
 * Contains the GatewayWithCustomIdRegistrationTest class.
 *
 * @copyright   Copyright (c) 2019 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2019-12-26
 *
 */

namespace Konekt\Euplatesc\Tests;

use Konekt\Euplatesc\EuplatescPaymentGateway;
use Vanilo\Payment\PaymentGateways;

class GatewayWithCustomIdRegistrationTest extends TestCase
{
    /** @test */
    public function the_gateway_id_can_be_changed_from_within_the_configuration()
    {
        $this->assertCount(1, PaymentGateways::ids());
        $this->assertContains('yesipay', PaymentGateways::ids());
    }

    protected function resolveApplicationConfiguration($app)
    {
        parent::resolveApplicationConfiguration($app);

        config(['konekt.euplatesc.gateway.id' => 'yesipay']);
    }

    protected function setUp(): void
    {
        PaymentGateways::reset();
        parent::setUp();
    }
}
