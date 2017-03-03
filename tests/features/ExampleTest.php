<?php


class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Edgar Morales',
            'email' => 'emorales@capi.lat',
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Edgar Morales')
            ->see('emorales@capi.lat');
    }
}
