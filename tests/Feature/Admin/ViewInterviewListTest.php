<?php

namespace Tests\Feature\Admin;

use App\Models\Interview;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewInterviewListTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function admin_can_see_list_of_all_interviews()
    {
        $this->disableExceptionHandling();

        $user = factory(User::class)->create();
        $interviewsOne = factory(Interview::class)->create();
        $interviewsTwo = factory(Interview::class)->create();
        $interviewsThree = factory(Interview::class)->create();

        $response = $this->actingAs($user)->get('/admin/interviews');

        $response->assertStatus(200);
        $this->assertEquals(3, Interview::count());
        $response->assertSee($interviewsOne->name);
        $response->assertSee($interviewsTwo->name);
        $response->assertSee($interviewsThree->name);
    }
}
