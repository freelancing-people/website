<?php

namespace Tests\Unit;

use App\Models\Interview;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InterviewTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_get_slug()
    {
        $interview = factory(Interview::class)->create([
            'name' => 'Christopher Hawkins',
        ]);

        $this->assertEquals('christopher-hawkins', $interview->slug);
    }

    /** @test */
    public function can_get_published_status()
    {
        $interviewOne = factory(Interview::class)->create();
        $interviewTwo = factory(Interview::class)->states('published')->create();

        $this->assertTrue($interviewTwo->isPublished());
        $this->assertFalse($interviewOne->isPublished());
    }

    /** @test */
    public function can_get_status()
    {
        $interviewOne = factory(Interview::class)->states('published')->create();
        $interviewTwo = factory(Interview::class)->create();

        $this->assertEquals('Published', $interviewOne->status);
        $this->assertEquals('Draft', $interviewTwo->status);
    }
}
