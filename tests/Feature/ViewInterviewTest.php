<?php

namespace Tests\Feature;

use App\Models\Interview;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewInterviewTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function user_can_view_interview()
    {
        $this->disableExceptionHandling();

        $interview = factory(Interview::class)->states('published')->create([
            'name'       => 'Christopher Hawkins',
            'founded_in' => '1992',
            'based_in'   => 'New York',
            'founders'   => 2,
            'employees'  => 5,
            'body'       => 'Interview Body',
            'avatar'     => UploadedFile::fake()->image('avatar.jpg'),
        ]);

        $response = $this->get('/interviews/christopher-hawkins');

        $response->assertStatus(200);
        $response->assertSee('Christopher Hawkins');
        $response->assertSee('1992');
        $response->assertSee('New York');
        $response->assertSee('2 Founders');
        $response->assertSee('5 Employees');
        $response->assertSee('Interview Body');
    }

    /** @test */
    public function user_cannot_view_draft_interviews()
    {
        factory(Interview::class)->create(['name' => 'Draft Interview']);

        $response = $this->get('/interviews/draft-interview');

        $response->assertStatus(404);
    }
}
