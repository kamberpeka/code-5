<?php

namespace Tests\Feature;

use Tests\TestCase;

class MessageStoreTest extends TestCase
{
    public function testEmailValidation()
    {
        $invalid_form_data = $this->post(route('message.store'), [
            'name' => 'John Doe',
            'email' => 'not email',
            'message' => 'A message that is long enough'
        ]);

        $invalid_form_data->assertSessionHasErrors(['email']);

        $valid_form_data = $this->post(route('message.store'), [
            'name' => 'John Doe',
            'email' => 'example@email.com',
            'message' => 'A message that is long enough'
        ]);

        $valid_form_data->assertRedirect(route('message.success'));

        $valid_form_data->assertSessionHasNoErrors();
    }

    public function testNameValidation()
    {
        $invalid_form_data = $this->post(route('message.store'), [
            'name' => 'I',
            'email' => 'example@email.com',
            'message' => 'A message that is long enough'
        ]);

        $invalid_form_data->assertSessionHasErrors(['name']);

        $valid_form_data = $this->post(route('message.store'), [
            'name' => 'John Doe',
            'email' => 'example@email.com',
            'message' => 'A message that is long enough'
        ]);

        $valid_form_data->assertRedirect(route('message.success'));

        $valid_form_data->assertSessionHasNoErrors();
    }

    public function testMessageValidation()
    {
        $invalid_form_data = $this->post(route('message.store'), [
            'name' => 'John Doe',
            'email' => 'example@email.com',
            'message' => 'short'
        ]);

        $invalid_form_data->assertSessionHasErrors(['message']);

        $valid_form_data = $this->post(route('message.store'), [
            'name' => 'John Doe',
            'email' => 'example@email.com',
            'message' => 'A message that is long enough'
        ]);

        $valid_form_data->assertRedirect(route('message.success'));

        $valid_form_data->assertSessionHasNoErrors();
    }

}
