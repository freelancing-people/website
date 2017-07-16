<?php

namespace Tests\Feature\Admin;

use App\Models\Interview;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddInterviewTest extends TestCase
{
    use DatabaseMigrations;

    private function validParams($overrides = [])
    {
        Storage::fake('interview');

        return array_merge([
            'name'       => 'Christopher Hawkins',
            'founded_in' => '1992',
            'based_in'   => 'New York',
            'founders'   => 2,
            'employees'  => 5,
            'body'       => 'Interview Body',
            'avatar'     => UploadedFile::fake()->image('avatar.jpg'),
            'published'  => true,
        ], $overrides);
    }

    /** @test */
    public function admin_can_see_the_add_interview_form()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/admin/interviews/create');

        $response->assertStatus(200);
    }

    /** @test */
    public function guests_cannot_see_the_add_interviews_page()
    {
        $response = $this->get('/admin/interviews/create');

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    /** @test */
    public function admin_can_add_a_interview()
    {
        $this->disableExceptionHandling();
        $user = factory(User::class)->create();
        Storage::fake('interview');

        $response = $this->actingAs($user)->post('/admin/interviews', [
            'name'       => 'Christopher Hawkins',
            'founded_in' => '1992',
            'based_in'   => 'New York',
            'founders'   => 2,
            'employees'  => 5,
            'body'       => 'Interview Body',
            'avatar'     => UploadedFile::fake()->image('avatar.jpg'),
            'published'  => true,
        ]);

        $interview = Interview::first();

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews');

        $this->assertTrue(true, $interview->isPublished());

        $this->assertEquals('Christopher Hawkins', $interview->name);
        $this->assertEquals(1992, $interview->founded_in);
        $this->assertEquals('New York', $interview->based_in);
        $this->assertEquals(2, $interview->founders);
        $this->assertEquals(5, $interview->employees);
        $this->assertEquals('Interview Body', $interview->body);
        $this->assertEquals(true, $interview->published);

        Storage::disk('interview')->assertExists($interview->avatar);
    }

    /** @test */
    public function name_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'name' => '',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('name');
        $this->assertEquals(0, Interview::count());
    }

    /** @test */
    public function founded_in_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'founded_in' => '',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('founded_in');
        $this->assertEquals(0, Interview::count());
    }

    /** @test */
    public function based_in_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'based_in' => '',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('based_in');
        $this->assertEquals(0, Interview::count());
    }

    /** @test */
    public function founders_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'founders' => '',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('founders');
        $this->assertEquals(0, Interview::count());
    }

    /** @test */
    public function founders_must_be_numeric()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'founders' => 'one',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('founders');
        $this->assertEquals(0, Interview::count());
    }

    /** @test */
    public function employees_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'employees' => '',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('employees');
        $this->assertEquals(0, Interview::count());
    }

    /** @test */
    public function employees_must_be_numeric()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'employees' => 'two',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('employees');
        $this->assertEquals(0, Interview::count());
    }

    /** @test */
    public function body_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'body' => '',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('body');
        $this->assertEquals(0, Interview::count());
    }

    /** @test */
    public function avatar_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'avatar' => '',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('avatar');
        $this->assertEquals(0, Interview::count());
    }

    /** @test */
    public function avatar_must_be_an_image()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->from('/admin/interviews/create')
                         ->post('/admin/interviews', $this->validParams([
                             'avatar' => 'abc.jpg',
                         ]));

        $response->assertStatus(302);
        $response->assertRedirect('/admin/interviews/create');
        $response->assertSessionHasErrors('avatar');
        $this->assertEquals(0, Interview::count());
    }
}
